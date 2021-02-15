# Laravel: Complete Guide to Laravel

Apparently it's a good idea to learn more languages. I agree.

This repository contains the code and project files generated as part of the Udemy course I'm currently following. The
course can be
[found here](https://www.udemy.com/course/learning-path-laravel-complete-guide-to-laravel/learn/lecture/9641472#overview)
.

The ReadMe is mostly for my own benefit, so I can remember what I've been doing. As such, the notes in this readme are
fairly informal.

## Project Notes

This project was developed in JetBrains PHPStorm, in Windows 10. The guide assumes as such. The webserver is run
with `php artisan serve`

### Software Requirements:

- JetBrains PHPStorm
- XAMPP
- PHP 7.4.14
- Composer
- NodeJS

The MySQL installation needs the following properties:

- Username: `root`
- Password: `    `
- Schema: `TerribleLaravel`

## What I've Been Doing

These notes are here so that I can quickly see at a glance what's been going on in the course.

### Section 1: Getting to Grips

#### 1 through 4: Introduction

It was a bit of preamble talking about Laravel, configuration, and why we use MVC stuff. Easy.

#### 5: Setting up some new routes

Apparently the course hasn't been updated for PHP 7.4 yet, but aside from that it was easy enough.

#### 6: Blade (not the vampire slayer)

Started to customise the Welcome Blade, by adding Bootstrap and my own content. Also, a ramble about why we aren't
learning CSS in this course.

#### 7: Blade 2 (still not the vampire slayer)

Template time. In this episode, I split out the Welcome Blade into three components - the `topnav`, the `template`, and
the `welcome` blade. The `template` includes all the CSS imports for the entire site. Nifty!

#### 8: Oh, CRUD.

This time we created some endpoints (a CRUD controller) for resources to manipulate. At present, there is no data or
database to use the CRUD endpoints with.

#### 9: Act Two - The Database Boogie

We set up some Database stuff here. XAMPP SQL FTW.

#### 10: Building Migrations pt 1

Oh. Well, we didn't do anything here.

#### 11: Building Migrations pt 2

But here, I made a migration for the Terrible Questions for users to submit, and then imported it into the MySQL
database using the command `php artisan migrate`

##### 12: Terrible Models

I was introduced to _models_ here. They're how the php code interacts with the database. I think. At any rate, I made a
model for TerribleQuestions and TerribleAnswers. Glorious.

## Deviations from the course

- Project name is `TerribleAnswers`, because the course subtitles said so.
- Project is no longer about asking Laravel Questions. Because of Circumstances.

## Final Thoughts

_Hi Rowan!_