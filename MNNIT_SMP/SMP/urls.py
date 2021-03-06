from django.urls import path, include, re_path
from django.contrib.auth import views as auth_views
from . import views
app_name = 'SMP'

urlpatterns = [
    # path('', include('SMP/urls.py'))
    path('', views.home, name = "home"),
    path('clubs/', views.clubs, name = "clubs"),
    path('events/', views.events, name = "events"),
    path('sports/', views.sports, name = "sports"),
    path('academics/', views.academics, name = "academics"),
    path('campus_life/', views.campus_life, name = "campus_life"),
    path('extra_curricular/', views.extra_curricular, name = "extra_curricular"),
    path('FAQ/', views.FAQs, name = "FAQs"),
    path('login/', views.loginbase, name = "loginbase"),
    path('contacts/', views.contacts, name = "contacts"),
    path('details/', views.details, name = "details"), 
    path('details/<str:usn>/', views.profile, name = "profile"),
    path('your_profile/change_password/', views.change_password, name = "change_password"),
    path('details/finalyear/<str:name>/', views.finalprofile, name = "profile4"),
    path('alumni/<str:uid>', views.alumniInfo, name = "alumniInfo"), 
    path('resources/', views.resources, name = "resources"),
    path('Read_More/', views.readmore, name = "readmore"),
    path('Your_profile/', views.selfdetails, name = "selfdetails"),
    path('logout/', views.logout_request, name = "logout_request"),
    path('data_add/', views.run, name = "run"),
    path('alumni_signup/', views.signupA, name = "signupA"),
    path('alumuni/', views.alumuni, name = "alumuni"),
    path('announce/', views.announce, name = "announce"),
    path('mentorteam/', views.mentorteam, name = "mentorteam"),
    


]