# Laravel: Complete Guide to Laravel

## Introduction

Apparently it's a good idea to learn more languages. I agree.

This repository contains the code and project files generated as part of the Udemy course I'm currently following. The
course can be
[found here](https://www.udemy.com/course/learning-path-laravel-complete-guide-to-laravel/learn/lecture/9641472#overview)
. It is taught by J. Alexander Curtis ([@_jacurtis](https://twitter.com/_jacurtis)), for those wondering.

![Terrible Answers](/_resources/images/terrible.png)


<details> 

<summary> Preamble </summary>

### What is Terrible Answers?

This Laravel crash-course takes you on an adventure building a Yahoo Answers or Stack Exchange style Q&A website. The
course instructor uses the theme of Laravel to build _Laravel Answers_, however when the automagically generated
subtitles in the course said "Terrible Answers", I knew what had to be done.

### Why so much writing?

The ReadMe is mostly for my own benefit, so I can remember what I've been doing. As such, the notes in this readme are
fairly informal. They're basically the types of notes I kept during lectures at uni, but these ones are public... for
reasons.

### Hey! You left some keys there!

Yes. The app key is fine here because it's _not even remotely pretending to be a usable project_. Also, if you do plan
on using this project (why?), change the app key using `php artisan key:generate`. The mailbox keys won't matter, as
Mailtrap allows me to delete the key configuration when I'm done. They only exist out of convenience - it means I don't
have to keep track of two .env files on my work machine, and my home machine. _They have no value, and no harm can be
done with them_. It's just an artifact of convenience for following the Laravel course across two machines.

Should I just... not? Yes. You shouldn't either - the app key is used
for [cookie encryption](https://tighten.co/blog/app-key-and-you/) and that's kind of important for _actual projects_.
Honestly, I forgot that I uploaded my app key until it was too late.

[//]: # (TODO: Remove keys in the final version. Nuke Mailtrap account.)

## How to Run

[//]: # (TODO: I'll flesh this out when I've actually finished the project.)

## Project Notes

This project was developed in JetBrains PHPStorm, in Windows 10. This """guide""" assumes as such. The webserver is run
with `php artisan serve`.

### Software Requirements:

[//]: # (TODO: Ensure this section is accurate when I'm done)

- JetBrains PHPStorm
- XAMPP
- PHP 7.4.14
- Composer
- NodeJS
- WebPack

The MySQL installation needs the following properties:

- Username: `root`
- Password: `    `
- Schema: `TerribleLaravel`

Some [PHP skulduggery](https://laravel.com/docs/8.x/authentication) that is required to get this project off the ground:

```
composer require laravel/ui
php artisan ui vue --auth
php artisan migrate
```

</details>

## What I've Been Doing

These notes are here so that I can quickly see at a glance what's been going on in the course. As there are a lot of
notes being made, I've nested each primary section into summary tabs. Click them to expand.

### Section 1: Laravel Foundations: Basics to Every App

This course is split into three sections. This section is essentially a "getting to grips with Laravel" type tutorial,
and shows how to get started with Laravel's controllers and migration features, along with Blades and the `ui/Auth`
library.

<details>

<summary>Click to expand</summary>

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

#### 20: Mirror, Mirror, on the wall, how can I use this app to answer questions?

Wish granted, my sweet river trout. Now you can _submit_ some terrible answers! I actually overcomplicated this a little
bit, and had some fun with blades to split things out into more distinct modules than the course expected of me.
Maintainability!

#### 21:  Hey dude what the h*ck

Fine, now you can _see_ the terrible answers too. Happy?

This section showed me how to utilise the model side of the 1:M relationship I established in Section 1#19. As far as
basic applications go, this one seems to be on the right tracks.

#### 22: Who are you? Laravel Authentication 101

A two-part lesson, how snazzy. The dude talks about how middleware works and what running the authentication add-in
process does to your project.

#### 23: LA101.2

Migrated a couple more tables over. This time, they're the `create_users` and `password_resets` tables. These, along
with the boilerplate code that was generated previously, have made it so that users can register and log in at the
Terrible Answers website. The `auth` UI blades provided by Laravel have been mutilated, so they now fit into my modified
versions nicely.

#### 24: Fool of a Took...

The guy rambled at me for like 7 minutes about how users expect a password reset process to work. I registered for
Mailtrap, and put all the auth tokens into the project.

#### 25: ... can now reset his password

Spent some time wrestling the mail spoofing service, only for it to end up being the work firewall ruining my day. I
went on to protect the website under the `auth` middleware! Heck yeah! Next step involves setting permissions for
different users, as the system currently only recognises `logged in` and `not logged in`. I also updated a couple blades
to use the template generated previously in the project, and added the PHP.ini file I'm using here (so I can get it
running at home quicklier).

#### 26: Owning Things Is Fun...

We jumped in with updating a couple of models to establish user->submission relationships, then created migrations to
complement them. After adding a line into the `store` methods of the controllers, we now have some functional user
association. This new data is now handily displayed in the blades. Unfortunately that doesn't restrict access - yet.
Update functionality coming Soon.

#### 27: ...But Keeping Them Is Funner

Up until now, our web service didn't offer a way to edit questions. This lecture discusses this flaw, and shows how to
fix it. Neat.

#### 28: oh no

I'll go back and fix this later. I was having issues with calling `$answer->question->title` for some reason.

[//]: # (TODO: Debug 1#27 and 1#28)

#### 29: Eager Loading

</details>

### Section 2: Intermediate Laravel: Adding Popular Features to Our Apps

The numbering continues onward from 1#x - so the first chapter in this continued story will be 2#30. Which makes sense,
right? Good. Onwards and downwards, into the Mines of Moria!

<details>

<summary>Click to expand </summary>

#### 30: Course Overview

#### 31: Laravel Mix Talk

#### 32: More Laravel Mix Talk

#### 33: Implementing Laravel Mix

Firstly, _it's so cool_. Just tag your webpack.mix.js command with `.version()`
Remember to call assets using `mix('foo/bar.css')` instead of `assets(foo/bar.css)` to ensure the cachebusting side of
Mix works.

#### 34: Front-End Presets

#### 35: A Second Introduction to MailTrap

#### 36: Making a Contact Form

That's about all we did here, but it's the furthest thing we really did so far!
37 will apparently put the back-end functionality in place for this.

#### 37: Mailables

#### 38:

#### 39:

#### 40:

#### 41:

Setting up a Vonage (Nexmo) account
`composer require nexmo/client` and paste in some keys, basically

#### 42:

php artisan tinker

change db manually

add nexmo to notifiable

#### 43:

#### 44:

#### 45:

#### 46:

#### 47:

#### 48:

#### 49:

#### 50:

#### 51:

#### 52:

#### 53: Gulp

Install Gulp, tested Postman GET request against Github API
https://api.github.com/users/nlovell

#### 54: Gulp2

#### 55:

#### 56:

#### 57:

#### 58:

#### 59:

#### 60:

#### 61:

</details>

## Deviations from the course

I don't always follow instructions good. This section shows _where_ I differed from the provided material.

- Course is based on PHP 5.x. I am using PHP 7.4.
- Project name is `TerribleAnswers`, because the course subtitles said so.
- Project is no longer about asking Laravel Questions. Because of Circumstances. Any instance of `LaravelQuestions` is
  now `TerribleQuestions`. The same applies to answers.
- Branding is now a blatant rip-off of Yahoo Answers

## Final Thoughts

_Hi Rowan!_