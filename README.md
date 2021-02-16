# Laravel: Complete Guide to Laravel

## Introduction

Apparently it's a good idea to learn more languages. I agree.

This repository contains the code and project files generated as part of the Udemy course I'm currently following. The
course can be
[found here](https://www.udemy.com/course/learning-path-laravel-complete-guide-to-laravel/learn/lecture/9641472#overview)
.

![Terrible Answers](/_resources/images/terrible.png)

### What is Terrible Answers?

This Laravel crash-course takes you on an adventure building a Yahoo Answers or Stack Exchange style Q&A website. The
course instructor uses the theme of Laravel to build _Laravel Answers_, however when the automagically generated
subtitles in the course said "Terrible Answers", I knew what had to be done.

### Why so much writing?

The ReadMe is mostly for my own benefit, so I can remember what I've been doing. As such, the notes in this readme are
fairly informal.

## How to Run

TODO: I'll flesh this out when I've actually finished the project.

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

### Section 1: Laravel Foundations: Basics to Every App

This course is split into three sections. This section is essentially a "getting to grips with Laravel" type tutorial

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

#### 12: Terrible Models

I was introduced to _models_ here. They're how the php code interacts with the database. I think. At any rate, I made a
model for TerribleQuestions and TerribleAnswers. Glorious.

#### 13: Delicious Data

First up, we make a new view. This blade is the `questions.create` blade, and it's where we create questions. Terrible
questions, I hope. We don't yet do anything with the form we just created.

#### 14: Data Data Data

Finally! I'm sending _data_ places! In this case, it's from a form to the back-end. The website now allows me to send
unsanitised data to the database via a POST method at the `questions/create` endpoint. It then redirects the user to the
respective page for the new question, at `questions/show/$id` - however there's no blade here to display the data. 1#15
will surely bring such functionality!

#### 15: Displaying Displaying Displaying

1#15 did indeed bring such functionality.

#### 16: Displayinger Displayinger Displayinger

Now we can view _all_ the records at once, from the questions index page.

#### 17: Pagination

Don't want to view _all_ the records? How about _some_ of the records? At a time. On pages. Buckle up and get paginated,
lad.

#### 18: Technology Connections - part 1

A bit of a talk about database relationships and whatnot. Most of this is stuff I covered at university, so I skimmed
over it. I did set up the `TerribleAnswers` migration at this step though.

#### 19: Technology Connections - part 2

Let's open with a haiku:

```
Lemons, like tables
Are almost always bitter
And I dropped them all.
```

Turns out `php artisan migrate:fresh` is the command you need for that, which I needed to do because I messed the tables
up earlier. Not a big deal, thankfully.

We made another resource controller, and another model. In this lesson, we actually ended up populating both models with
the 1:M relationship betwixt the `TerribleAnswers` and `TerribleQuestions`. This will allow a question to have many
answers mapped against it. Frantabulous.

#### 20

#### 21

#### 22

#### 23

#### 24

#### 25

#### 26

#### 27

#### 28

#### 29

## Deviations from the course

I don't always follow instructions good. This section shows _where_ I differed from the provided material.

- Project name is `TerribleAnswers`, because the course subtitles said so.
- Project is no longer about asking Laravel Questions. Because of Circumstances. Any instance of `LaravelQuestions` is
  now `TerribleQuestions`. The same applies to answers.

## Final Thoughts

_Hi Rowan!_