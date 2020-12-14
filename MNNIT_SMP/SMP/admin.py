
from django.contrib import admin
from .models import UserProfile, Branch, SMPLink, UserA, Events, Club, Student, Mentor, FinalMentor, Field, Alumni
# Register your models here.

admin.site.register(UserProfile)
admin.site.register(Branch)
admin.site.register(SMPLink)
admin.site.register(UserA)
admin.site.register(Events)
admin.site.register(Club)
admin.site.register(Student)
admin.site.register(Mentor)
admin.site.register(FinalMentor)
admin.site.register(Field)
admin.site.register(Alumni)