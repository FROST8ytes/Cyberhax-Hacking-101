![img](../../assets/banner.png)

<img src="../../assets/cyberhax.png" style="margin-left: 20px; zoom: 80%;" align=left />
<font size="10">Robot Assistant</font>

8<sup>th</sup> February 2024

​Prepared By: FROST8ytes

​Challenge Author(s): FROST8ytes

​Difficulty: <font color=green>Medium</font>

Flag: `Cyberhax{Mu5t_r3ch4rg3_zzz}`

## Synopsis

This challenge involves visiting a homepage and finding a hidden directory/path which contains the flag.

## Description

Try to interact with the robot to get what you are looking for.

Flag example: `Cyberhax{3x4mp13_f14g_h3r3}`

Disclaimer: No bruteforce is needed.

## Skills Required

- Basic understanding of web

## Skills Learned

- The existence of `robots.txt`.

## Application Overview

![img](./overview.png)

### Visiting the Website

The website contains a beautiful _Cyberhax_ logo with two buttons that might be interesting.

`Instagram` button leads to _Cyberhax_'s [Instagram](https://www.instagram.com/cyberhaxutp/) account, while `Launch Robot` button simply triggers an alert with the message of:

> Sorry, your robot is charging.

Viewing the page source and other sources also does not reveal anything unusual.

### Understanding Clues

The description tells us to interact with the robot. Almost every website has `robots.txt`.

### What is the function of `robots.txt`?

According to Google's [website](https://developers.google.com/search/docs/crawling-indexing/robots/intro):

> A robots.txt file tells search engine crawlers which URLs the crawler can access on your site. This is used mainly to avoid overloading your site with requests...

### Viewing `robots.txt`

By going to `http://<challenge URL>/robots.txt`, we see one `Disallow` directory:

```
User-agent: *
Disallow: /robot420
```

### Viewing `/robot420`

By going to `http://<challenge URL>/robot420`, we see the robot murmuring the flag.
