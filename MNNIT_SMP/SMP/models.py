from django.db import models
from django.contrib.auth.models import User
import random
# from . import imported

def get_image_path(instance, filename):
     return 'images/{0}/{1}'.format(instance.username, filename)     # define image upload path

# Create your models here.
# class User(models.Model):                                        # for students

#     username = models.CharField(max_length = 20,default = "")
#     password = models.PasswordField(max_length = 30, default = "")
#     first_name = models.CharField(default = "", max_length = 20)
#     last_name= models.CharField(max_length = 20, default = "")
#     email = models.CharField(max_length = 50, default = "")         # year of student

#     def __str__(self):
#         return self.user.username

class UserProfile(models.Model):
    user = models.OneToOneField(User, on_delete=models.CASCADE)
    phone = models.CharField(max_length=14, blank=True)
    address = models.TextField(blank=True)
    is_alumni = models.BooleanField(default=False)
    is_mentor = models.BooleanField(default=False)
    branch = models.ForeignKey("Branch", on_delete=models.CASCADE)
    secret_key = models.IntegerField()
    year = models.IntegerField(default=0)
    is_email_verified = models.BooleanField(default=False)
    
    def save(self, *args, **kwargs):
        self.secret_key = random.randint(100000, 999999)
        super().save(*args, **kwargs)
    
class SMPLink(models.Model):
    TYPES = (
        ('S', 'Social Media'),
        ('A', 'Other Sections')
    )
    link = models.URLField()
    name = models.CharField(max_length=50)
    linktype = models.CharField(choices=TYPES, max_length=1, default='A')
    
    def __str__(self):
        return self.name

class UserA(models.Model):
    title = models.CharField(max_length=100, unique=True)
    description = models.TextField(blank=True)
    official_link = models.URLField(blank=True)
    
    def __str__(self):
        return self.title

class Branch(models.Model):
    title = models.CharField(max_length=100, unique=True)
    description = models.TextField(blank=True)
    official_link = models.URLField(blank=True)
    
    def __str__(self):
        return self.title

class Events(models.Model):
    TYPES = (
        ('S', 'Sports'),
        ('C', 'Club'),
        # ('')
    )
    title = models.CharField(max_length=100, unique=True)
    description = models.TextField(blank=True)
    
class Club(models.Model):
    title = models.CharField(max_length=100, unique=True)
    description = models.TextField(blank=True)
    official_link = models.URLField(blank=True)
    
    def __str__(self):
        return self.title
    
    
class Student(models.Model):                                        # for students

    user = models.OneToOneField(User, on_delete = models.CASCADE)
    mentor_name = models.CharField(max_length = 30)
    mentor_regn = models.CharField(default = "", max_length = 10)
    branch = models.CharField(max_length = 40)
    syear = models.CharField(max_length = 10, default = "")         # year of student

    def __str__(self):
        return self.user.username

class Mentor(models.Model):                                         # for mentors

    mentor = models.OneToOneField(Student, models.CASCADE, default = "")
    roomn = models.CharField(max_length = 7, default = "")
    hostel = models.CharField(max_length = 40, default = "")
    contactn = models.CharField(max_length = 15, default = "")

    def __str__(self):
        return self.mentor.user.username

class FinalMentor(models.Model):                                         # for mentors

    regn = models.CharField(max_length = 16)
    dept = models.CharField(max_length = 40)
    roomn = models.CharField(max_length = 7, default = "")
    hostel = models.CharField(max_length = 40, default = "")
    contactn = models.CharField(max_length = 15, default = "")
    name = models.CharField(max_length = 40, default = "")
    def __str__(self):
        return self.name

class Alumni(models.Model):
    alumni = models.OneToOneField(UserA, on_delete=models.CASCADE)
    description = models.TextField()
    field = models.CharField(max_length=50 )