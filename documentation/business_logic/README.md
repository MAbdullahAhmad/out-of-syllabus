# Business Logic Documentation

This documentation has business-logic implemented for Out-of-Syllabus.

## Application Layout

There is an application layout that includes:
- Header (Navigation)
- Footer

It is used in all customer pages. [Read more](./application-layout.md).

#### Navigation

- **Home**: Links to the homepage.
- **About Us**: Links to the About Us page, providing information about the teacher.
- **Resources**: Links to the Resources page, where users can purchase notes.
- **Login**: Links to the login page, where users can access the LMS or their profile.

For navigation details, [Click here](navigation.md)


## Pages

Following are pages for Out-of-Syllabus:

1. Homepage
2. About Us
3. Resources
4. Programs

#### 1. Homepage

Homepage is primary landing page with following sections:
- Welcome Message
- Introduction
- Services
- Testimonials

[Read more](./pages/Homepage.md).

#### 2. About Us

About us page tells about the teacher.

It has following sections:
- Picture, Name, Title, Bio
- Skills, Experience and Achievements
- Mission & Values
- Contact Information

[Read more](./pages/About-Us.md).

#### 3. Resources

Resources page has a listing of notes that can be purchased after online-payment. [Read more](./pages/Resources.md).

#### 4. Programs

User can:
- View All Programs (A-Levels, AS-Levels, O-Levels)
- View Single Program Details
- Apply / Enroll into a program. (we can provide optional courses selection here)
- Make Payment ~> Verify Email ~> Set Password
- View enrolled programs in `account/my-programs` and visit a program page at `account/programs/{name}`.

##### LMS:

We can only provide a short description of enrolled and active programs here.

LMS will be launched as an independant project with shared Database.