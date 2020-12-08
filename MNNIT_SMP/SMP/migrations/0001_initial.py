# Generated by Django 3.1.3 on 2020-12-08 16:44

from django.conf import settings
from django.db import migrations, models
import django.db.models.deletion


class Migration(migrations.Migration):

    initial = True

    dependencies = [
        migrations.swappable_dependency(settings.AUTH_USER_MODEL),
    ]

    operations = [
        migrations.CreateModel(
            name='Branch',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('title', models.CharField(max_length=100, unique=True)),
                ('description', models.TextField(blank=True)),
                ('official_link', models.URLField(blank=True)),
            ],
        ),
        migrations.CreateModel(
            name='Club',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('title', models.CharField(max_length=100, unique=True)),
                ('description', models.TextField(blank=True)),
                ('official_link', models.URLField(blank=True)),
            ],
        ),
        migrations.CreateModel(
            name='Events',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('title', models.CharField(max_length=100, unique=True)),
                ('description', models.TextField(blank=True)),
            ],
        ),
        migrations.CreateModel(
            name='Field',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('title', models.CharField(max_length=50, unique=True)),
                ('description', models.TextField(blank=True)),
            ],
        ),
        migrations.CreateModel(
            name='FinalMentor',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('regn', models.CharField(max_length=16)),
                ('dept', models.CharField(max_length=40)),
                ('roomn', models.CharField(default='', max_length=7)),
                ('hostel', models.CharField(default='', max_length=40)),
                ('contactn', models.CharField(default='', max_length=15)),
                ('name', models.CharField(default='', max_length=40)),
            ],
        ),
        migrations.CreateModel(
            name='SMPLink',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('link', models.URLField()),
                ('name', models.CharField(max_length=50)),
                ('linktype', models.CharField(choices=[('S', 'Social Media'), ('A', 'Other Sections')], default='A', max_length=1)),
            ],
        ),
        migrations.CreateModel(
            name='UserA',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('title', models.CharField(max_length=100, unique=True)),
                ('description', models.TextField(blank=True)),
                ('official_link', models.URLField(blank=True)),
            ],
        ),
        migrations.CreateModel(
            name='UserProfile',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('reg_no', models.CharField(max_length=40)),
                ('room_no', models.CharField(max_length=10)),
                ('hostel', models.CharField(max_length=40)),
                ('gender', models.CharField(blank=True, choices=[('M', 'Male'), ('F', 'Female'), ('O', 'Other')], max_length=1)),
                ('phone', models.CharField(blank=True, max_length=14)),
                ('address', models.TextField(blank=True)),
                ('is_alumni', models.BooleanField(default=False)),
                ('is_mentor', models.BooleanField(default=False)),
                ('secret_key', models.IntegerField()),
                ('year', models.IntegerField(default=0)),
                ('is_email_verified', models.BooleanField(default=False)),
                ('branch', models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, to='SMP.branch')),
                ('user', models.OneToOneField(on_delete=django.db.models.deletion.CASCADE, to=settings.AUTH_USER_MODEL)),
            ],
        ),
        migrations.CreateModel(
            name='Student',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('branch', models.CharField(max_length=40)),
                ('syear', models.CharField(default='', max_length=10)),
                ('applied_fields', models.ManyToManyField(to='SMP.Field')),
                ('mentored_by', models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, to='SMP.userprofile')),
                ('user', models.OneToOneField(on_delete=django.db.models.deletion.CASCADE, to=settings.AUTH_USER_MODEL)),
            ],
        ),
        migrations.CreateModel(
            name='Mentor',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('roomn', models.CharField(default='', max_length=7)),
                ('hostel', models.CharField(default='', max_length=40)),
                ('contactn', models.CharField(default='', max_length=15)),
                ('profile', models.OneToOneField(on_delete=django.db.models.deletion.CASCADE, to='SMP.userprofile')),
                ('students_under', models.ManyToManyField(to='SMP.Student')),
            ],
        ),
        migrations.AddField(
            model_name='field',
            name='applicants',
            field=models.ManyToManyField(to='SMP.Student'),
        ),
        migrations.CreateModel(
            name='Alumni',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('description', models.TextField()),
                ('field', models.CharField(max_length=50)),
                ('alumni', models.OneToOneField(on_delete=django.db.models.deletion.CASCADE, to='SMP.userprofile')),
            ],
        ),
    ]
