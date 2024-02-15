![img](../../assets/banner.png)

<img src="../../assets/cyberhax.png" style="margin-left: 20px; zoom: 80%;" align=left />
<font size="10">Where's Waldo?</font>

7<sup>th</sup> February 2024

​Prepared By: FROST8ytes

​Challenge Author(s): FROST8ytes

​Difficulty: <font color=green>Easy</font>

Flag: `Cyberhax{Dud3_1m_r1ght_h3r3!}`

## Synopsis

This challenge involves visiting a homepage and inspecting it to find hidden secrets.

## Description

Find Waldo and you will get the prize!

Flag example: Cyberhax{3x4mp13_f14g_h3r3}

Disclaimer: No bruteforce is needed.

## Skills Required

- Basic understanding of web
- Basic reconnaissance skills

## Skills Learned

- Inspecting HTML code.

## Application Overview

![img](./overview.png)

### Visiting the Website

It shows a few lines of text instructing us to find Waldo. Nothing else seems to be displayed.

### Closer Inspection

By viewing the page source or inspecting the page, we see the flag embedded in the HTML code:

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Where's Waldo?</title>
    <style>
        body {
            background-color: white;
        }
        .hihihi {
            color: white;
        }
    </style>
</head>
<body>
    <h1>Where is Waldo? Can you find him?</h1>
    <p>Waldo is not here. You are searching in the wrong location.</p>
    <p class="hihihi" aria-hidden="true">Dude, I am right here! Here is the key:</p>
    <code class="hihihi" aria-hidden="true">Cyberhax{Dud3_1m_r1ght_h3r3!}</code>
</body>
</html>
```

### Shortcut to Solution

Simply highlight all by mouse, or by pressing <kbd>ctrl</kbd> + <kbd>a</kbd> on Windows/Linux, or by pressing <kbd>⌘</kbd> + <kbd>a</kbd>, the flag will be visible.