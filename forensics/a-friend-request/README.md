![img](../../assets/banner.png)

<img src="../../assets/cyberhax.png" style="margin-left: 20px; zoom: 80%;" align=left />
<font size="10">A Friend Request</font>

9<sup>th</sup> February 2024

​Prepared By: Fizi

​Challenge Author(s): Fizi

​Difficulty: <font color=green>Medium</font>

Flag: `Lorem ipsum`

## Synopsis

The challenge involves finding hidden messages in an image to open a password-protected PDF file.

## Description

My friend has been acting a little weird lately. He sent me an important pdf file, but he forgot the password. He said the password is inside the image. Can you crack the code and reveal the secret within?

Flag example: `Cyberhax{3xmp13_f14g_h3r3}`


## Skills Required

- binwalk
- strings
  
 
## Skills Learned

- Finding hidden metadata within an image

## Challenge Overview

1. Initial Inspection:
  - The challenge provides two files: an image (t1tan1c.jpg) and a pdf file (ImportantDocs.pdf).
2. Image Analysis:
  - Examined the image file, which is a picture of the titanic ship
  - Used tools like `binwalk` OR `strings` to investigate the image further.
  a) Binwalk walkthrough

![f](https://github.com/FROST8ytes/Cyberhax-Hacking-101/assets/131322679/c16c90d1-8cca-4b2c-aadd-55f6a2e03454)
![g](https://github.com/FROST8ytes/Cyberhax-Hacking-101/assets/131322679/d49927c6-9063-469c-8c2c-cf11bc8a457f)


  b) Strings walkthrough
  
![c](https://github.com/FROST8ytes/Cyberhax-Hacking-101/assets/131322679/db994d06-9c16-4d91-9e28-5c23b134f38c)
![Screenshot_2024-02-16_06-49-47](https://github.com/FROST8ytes/Cyberhax-Hacking-101/assets/131322679/afa0f823-8f11-49da-b8dd-279f7108805b)


3. Get Flag:
  - Put the password you obtain from the image to unlock the pdf file, revealing a picture of Leonardo DiCaprio pointing the flag.
![b](https://github.com/FROST8ytes/Cyberhax-Hacking-101/assets/131322679/ea186e5a-2edc-4025-95a6-39f4180c27be)
