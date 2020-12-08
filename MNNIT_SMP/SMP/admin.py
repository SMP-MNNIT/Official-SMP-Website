
from django.contrib import admin
from .models import UserProfile, Branch, SMPLink
# Register your models here.

admin.site.register(UserProfile)
admin.site.register(Branch)
admin.site.register(SMPLink)