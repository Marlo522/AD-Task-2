<a name="readme-top">

<br/>

<br />
<div align="center">
  <a href="https://github.com/Marlo522">
  <!-- TODO: If you want to add logo or banner you can add it here -->
    <img src="/assets/img/jetlix_logo.png" alt="Jetlix" width="130" height="100">
  </a>
<!-- TODO: Change Title to the name of the title of your Project -->
  <h3 align="center">Jetlix</h3>
</div>
<!-- TODO: Make a short description -->
<div align="center">
  Jetlix is a PHP-based web application that displays a collection of Korean movies and series. Users can browse, filter by genre, and view posters and titles. The project demonstrates PHP component structure, basic routing, and simple frontend filtering with JavaScript.

</div>

<br />

<!-- TODO: Change the zyx-0314 into your github username  -->
<!-- TODO: Change the WD-Template-Project into the same name of your folder -->

![](https://visit-counter.vercel.app/counter.png?page=Marlo522/AD-Task-2)

[![wakatime](https://wakatime.com/badge/user/018dd99a-4985-4f98-8216-6ca6fe2ce0f8/project/63501637-9a31-42f0-960d-4d0ab47977f8.svg)](https://wakatime.com/badge/user/018dd99a-4985-4f98-8216-6ca6fe2ce0f8/project/63501637-9a31-42f0-960d-4d0ab47977f8)

---

<br />
<br />

<!-- TODO: If you want to add more layers for your readme -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#overview">Overview</a>
      <ol>
        <li>
          <a href="#key-components">Key Components</a>
        </li>
        <li>
          <a href="#technology">Technology</a>
        </li>
      </ol>
    </li>
    <li>
      <a href="#rule,-practices-and-principles">Rules, Practices and Principles</a>
    </li>
    <li>
      <a href="#resources">Resources</a>
    </li>
  </ol>
</details>

---

## Overview

<!-- TODO: To be changed -->
<!-- The following are just sample -->

Jetlix is a PHP-based web application that displays a collection of Korean movies and series. Users can browse, filter by genre, and view posters and titles. The project demonstrates PHP component structure, basic routing, and simple frontend filtering with JavaScript.

### Key Components

<!-- TODO: List of Key Components -->
<!-- The following are just sample -->

- Navigation bar and responsive layout
- Movie and series cards with images and titles
- Genre filtering for both movies and series (JS)

### Technology

<!-- TODO: List of Technology Used -->

#### Language

![HTML](https://img.shields.io/badge/HTML-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS](https://img.shields.io/badge/CSS-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)

#### Framework/Library

![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-06B6D4?style=for-the-badge&logo=tailwindcss&logoColor=white)

## Rules, Practices and Principles

<!-- Do not Change this -->

1. Always use `AD-` in the front of the Title of the Project for the Subject followed by your custom naming.
2. Do not rename `.php` files if they are pages; always use `index.php` as the filename.
3. Add `.component` to the `.php` files if they are components code; example: `footer.component.php`.
4. Add `.util` to the `.php` files if they are utility codes; example: `account.util.php`.
5. Place Files in their respective folders.
6. Different file naming Cases
   | Naming Case | Type of code | Example |
   | ----------- | -------------------- | --------------------------------- |
   | Pascal | Utility | Accoun.util.php |
   | Camel | Components and Pages | index.php or footer.component.php |
7. Renaming of Pages folder names are a must, and relates to what it is doing or data it holding.
8. Use proper label in your github commits: `feat`, `fix`, `refactor` and `docs`
9. File Structure to follow below.

```
AD-ProjectName
└─ assets
|   └─ css
|   |   └─ name.css
|   └─ img
|   |   └─ name.jpeg/.jpg/.webp/.png
|   └─ js
|       └─ name.js
└─ components
|   └─ name.component.php
|   └─ templates
|      └─ name.component.php
└─ handlers
|   └─ name.handler.php
└─ pages
|  └─ pageName
|     └─ assets
|     |  └─ css
|     |  |  └─ name.css
|     |  └─ img
|     |  |  └─ name.jpeg/.jpg/.webp/.png
|     |  └─ js
|     |     └─ name.js
|     └─ index.php
└─ utils
|   └─ name.utils.php
└─ vendor
└─ .gitignore
└─ bootstrap.php
└─ composer.json
└─ composer.lock
└─ index.php
└─ readme.md
└─ router.php
```

> The following should be renamed: name.css, name.js, name.jpeg/.jpg/.webp/.png, name.component.php(but not the part of the `component.php`), Name.utils.php(but not the part of the `utils.php`)

## Resources

<!-- TODO: Add References -->

| Title         | Purpose                                   | Link                           |
| ------------- | ----------------------------------------- | ------------------------------ |
| PHP Manual    | Official PHP documentation                | https://www.php.net/manual/en/ |
| Tailwind CSS  | Utility-first CSS framework documentation | https://tailwindcss.com/docs   |
| MDN Web Docs  | HTML/CSS/JS reference                     | https://developer.mozilla.org/ |
| Poster Images | Poster images of movies and series        | https://www.google.co.uk/      |
