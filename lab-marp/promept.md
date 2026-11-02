# Task: Create my Markdown and Marp lab presentations

Work directly on my project and create two short presentations in simple English.

My technical project is:

Event Ticketing

It is a web platform where users can find events and book tickets online.

Main project entities:

- Event: stores event information.
- Category: classifies events.
- Organizer: manages events.
- User: searches and books tickets.
- Booking: stores the reservation information.

Learner: Oussama Ech-Charef
Supervisor: Fouad Essarraj

## Part 1: Markdown Lab

Create or update:

Lab-Markdown/projet-technique.md

Use Markdown only, not Marp.

The file must be short and written in simple A2 English.

It must contain:

- Project Topic
- Project Objective
- Headings and paragraphs
- Bold text
- Italic text
- Strikethrough text
- Bulleted list
- Numbered list
- Task list
- Link
- Image
- Table
- Inline code
- JSON code block
- Blockquote
- Horizontal line

Use the project Event Ticketing in all examples.

## Part 2: Marp Lab

Create or update:

lab-marp/prisontation.md

Also create:

lab-marp/style.css

The presentation must use Marp and start with:

---
marp: true
theme: default
paginate: true
size: 16:9
---

The presentation must contain these sections:

1. Cover page
2. Introduction
3. Project Needs
4. Problem
5. The Need
6. Project Analysis
7. Main Requirements
8. Main Functionalities
9. Data Organization
10. Project Design
11. Database Relationships
12. Simplified Data Model
13. Booking Workflow
14. Project Implementation
15. Technical Stack
16. Booking Data Example
17. Project Prototype
18. Project Progress
19. Conclusion
20. Thank You

The cover page must contain:

- OFPPT logo: ./ofppt.jpg
- Solicode logo: ./solicode.png
- Project title: EVENT TICKETING
- Learner name: Oussama Ech-Charef
- Supervisor name: Fouad Essarraj

Use the logos side by side with CSS flexbox, space-between, and large size.

The presentation must explain:

- The problem of finding and booking events
- The need for a centralized ticket platform
- Event, Category, Organizer, User, and Booking
- CRUD operations
- Database relationships
- Booking workflow
- Technical stack:
  - HTML / CSS
  - JavaScript
  - PHP / Laravel
  - SQLite or MySQL
  - Eloquent ORM
  - Marp

Use this JSON example:

{
  "event": "Music Concert",
  "tickets": 2,
  "status": "confirmed"
}

Use a simple text data model:

ORGANIZER 1 creates N EVENT
CATEGORY 1 contains N EVENT
EVENT 1 has N BOOKING
USER 1 makes N BOOKING

Add a short progress checklist.

## Marp techniques required

Demonstrate these techniques inside the presentation:

- marp: true
- Slide separators with ---
- default theme
- gaia theme example
- uncover theme example
- Slide numbers using paginate
- Header and footer
- Custom background and text colors
- External CSS file connected with @import
- CSS classes such as cover, title, blue, and fragments
- A background image on one slide
- Speaker notes
- Progressive list using fragments
- Tables
- Code blocks
- Export commands for HTML, PDF, and PowerPoint

Use these export commands:

npx @marp-team/marp-cli lab-marp/prisontation.md --html
npx @marp-team/marp-cli lab-marp/prisontation.md --pdf
npx @marp-team/marp-cli lab-marp/prisontation.md --pptx

Keep the slides short and readable. Do not put too much text on one slide. Avoid overflow and content outside the slide.

Do not use a prototype image. On the prototype slide, use only short text and a list:

- Event list
- Event details
- Ticket booking

After creating the files:

1. Check all image paths.
2. Check the Markdown syntax.
3. Render the Marp presentation.
4. Test HTML, PDF, and PowerPoint export.
5. Confirm that all slides fit correctly.