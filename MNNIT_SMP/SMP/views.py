from django.http import request
from django.shortcuts import render, redirect
from django.http import HttpResponse
from django.contrib.auth.models import User
from django.contrib.auth import authenticate, login, logout
from .models import CampusLife, Events, Student, Mentor, FinalMentor, UserA, Alumni,UserProfile, Club, FAQ
from django.contrib import messages
import csv
from django.contrib.auth.decorators import user_passes_test


def home(request):
    return render(request, "SMP/homepage.html")

def loginbase(request):
    if request.user.is_authenticated:
        return redirect("SMP:details")
    if request.method == "POST":
        uname = request.POST.get("reg_n", "")
        paswo = request.POST.get("passw", "")
        user = authenticate(username = uname, password = paswo)
        if user is not None:
            login(request, user)
            return redirect("SMP:home")
        else:
            messages.info(request, 'Invalid Credentials!')
            
            return redirect("SMP:loginbase")
    
    
    return render(request, "SMP/signin.html")
def change_password(request):
    if request.method == 'POST':
        form = PasswordChangeForm(request.user, request.POST)
        if form.is_valid():
            user = form.save()
            update_session_auth_hash(request, user)  # Important!
            messages.success(request, 'Your password was successfully updated!')
            return redirect('change_password')
        else:
            messages.error(request, 'Please correct the error below.')
    else:
        form = PasswordChangeForm(request.user)
    return render(request, 'accounts/change_password.html', {
        'form': form
    })

def signupA(request):
    if request.user.is_authenticated:
        return redirect("SMP:details")
    if request.method == "POST":
        reg_no = request.POST.get("email", "")
        mail = request.POST.get("email", "")
        firname = request.POST.get("finame", "")
        lasname = request.POST.get("laname", "")
        passwor = request.POST.get("passwo", "")
        cpasswor = request.POST.get("cpasswo", "")
        desc = request.POST.get("des", "")
        selfield = request.POST.get("sfield", "")

        if passwor == cpasswor:
            p, created = User.objects.get_or_create(username=mail, first_name=firname, last_name=lasname, email=mail)
            p.set_password(passwor)
            p.save()

            pA, create = UserA.objects.get_or_create(userA = p, alumni_index=True)
            pA.save()
            alum, creating = Alumni.objects.get_or_create(alumni = pA, description=desc, field=selfield)
            alum.save()
            return redirect("SMP:home")

        else:
            messages.info(request, 'Password didn\'t Match')   
            return redirect("SMP:signupA")

    return render(request, 'SMP/signupalumni.html')

def contacts(request):
    return render(request, 'SMP/contact.html')

def events(request):
    events = Events.objects.all()
    data = {"events": events}
    return render(request, 'SMP/events.html', data)

def academics(request):
    return render(request, 'SMP/academics.html')

def alumuni(request):
    return render(request, 'SMP/alumuni.html')

def announce(request):
    announcements = Announcements.objects.all()
    data = {"announcements": announcements}
    return render(request, 'SMP/announce.html', data)

def campus_life(request):
    lives = CampusLife.objects.all()
    data = {"lives": lives}
    return render(request, 'SMP/infra.html', data)

def extra_curricular(request):
    return render(request, 'SMP/extra.html')

def FAQs(request):
    faqs = FAQ.objects.all()
    data = {"faqs": faqs}
    return render(request, 'SMP/faq.html', data)

def details(request):
    if request.user.is_authenticated:
        us = request.user
        stu = Student.objects.get(user = us)
        m2n = stu.mentored_by.user                                           # year+1 mentor name
        m2reg = stu.mentored_by.reg_no                                          # year+1 mentor registration number
        mentor2ndus = User.objects.get(username = m2reg)                  # year+1 mentor from users
        mentor2nd = Student.objects.get(user = mentor2ndus)              # year+1 mentor from students
        m3n = mentor2nd.mentored_by.user                                            # year+2 mentor name
        m3reg = mentor2nd.mentored_by.reg_no                                          # year+2 mentor registration number
        branchm = stu.branch
        year = stu.syear
        fment = FinalMentor.objects.filter(dept = branchm)
        return render(request,"SMP/mentor1.html", {'mentor2' : m2n,'mentor2reg' : m2reg, 'student' : stu, 'mentor3' : m3n, 'mentor3reg' : m3reg, 'mentor4': fment, 'year':year })

    else:
        return redirect("SMP:loginbase")

def clubs(request):
    clubsall = Club.objects.all()
    data = {"clubs":clubsall}
    return render(request,"SMP/clubs.html", data)

def resources(request):
    return render(request,"SMP/resources.html")

def logout_request(request):
    logout(request)
    return redirect("SMP:loginbase")
    
def readmore(request):
    return render(request, 'SMP/readMore1.html')

def profile(request, usn):         #######################
    usn = request.user
    usnm = User.objects.get(username = usn)
    stud = Student.objects.get(user = usnm)
    #ment = Mentor.objects.get(profile = stud)
    #roomno = ment.roomn
    #contactno = ment.contactn
    #hstl = ment.hostel
    #fname = ment.mentor.user.first_name
    #lname = ment.mentor.user.last_name
    #year = ment.mentor.syear
    roomno= stud.mentored_by.room_no
    contactno = stud.mentored_by.phone
    hstl = stud.mentored_by.hostel
    fname = stud.user.first_name
    lname = stud.user.last_name
    year = stud.syear
    return render(request, 'SMP/profile.html', {'username' : usn, 'room':roomno, 'contact':contactno, 'hostel':hstl, 'firstname':fname, 'lastname':lname, 'year':year})

def finalprofile(request, name):

    mentf = FinalMentor.objects.get(name = name)
    mentf_regn = mentf.regn
    mentf_roomn = mentf.roomn
    mentf_contact = mentf.contactn
    mentf_hostel = mentf.hostel
    mentf_dept = mentf.dept
    return render(request, 'SMP/profile4.html', {'username' : mentf_regn, 'room':mentf_roomn, 'contact':mentf_contact, 'hostel':mentf_hostel, 'name' : name, 'year': 'Final'})

def sports(request):
    
    return render(request, 'SMP/sports.html')

# def change_password(request,user):
#     if user.is_authenticated():
#         loguser = request.user
#         # curpass = loguser.password
#         if request.method == "POST":
#             npassword = request.POST.get('npass', "")
#             cnpassword = request.POST.get('cnpass', "")
#             if npassword == cnpassword:
#                 loguser.set_password(npassword)
#                 loguser.save()
#                 return redirect('SMP:selfdetails')
#             else:
#                 messages.info(request, 'Passwords didn\'t match!')
#                 return redirect('SMP:change_password')
#         return render(request,'SMP/changepassword.html')
#     else:
#         return redirect('SMP:loginbase')

def selfdetails(request):        #################
    usn = request.user
    usnm = User.objects.get(username = usn)
    stud = Student.objects.get(user = usnm)
    # ment = Mentor.objects.get(mentor = stud)
    # roomno = ment.roomn
    # contactno = ment.contactn
    # hstl = ment.hostel
    primarymentor = stud.mentored_by
    primarymentorusn = stud.mentored_by
    fname = stud.user.first_name
    lname = stud.user.last_name
    year = stud.syear
    return render(request, 'SMP/profileself.html', {'username' : usn, 'pmentor':primarymentor,'pmentorusn':primarymentorusn, 'firstname':fname, 'lastname':lname, 'year':year})

@user_passes_test(lambda u: u.is_superuser)  
def run(request):
    fhand = open('SMP/scripts/many/dat.csv')
    reader = csv.reader(fhand)


    for row in reader:
        
        post, created = User.objects.get_or_create(username = row[1])

        post.set_password(row[2])
        post.first_name = row[3]
        post.last_name = row[4]

        post.save()
        print(post)
    
    return HttpResponse('data added')


def mentorteam(request):       ##################
    mentors2nd = Mentor.objects.filter(profile__year = 2)
    mentors3rd = Mentor.objects.filter(profile__year = 3)
    mentorsfin = FinalMentor.objects.all()
    print(mentors2nd)
    print(mentors3rd)
    print(mentorsfin)
    data = {'mentors2nd':mentors2nd, 'mentors3rd':mentors3rd, 'mentorsfin':mentorsfin}
    return render(request, 'SMP/mentorall.html', data)

def alumniInfo(request, uid):
    us = UserProfile.objects.get(qr_code = uid)
    parent_user = us.user
    pass
    