![img](../../assets/banner.png)

<img src="../../assets/cyberhax.png" style="margin-left: 20px; zoom: 80%;" align=left />
<font size="10">Whistleblower</font>

9<sup>th</sup> February 2024

​Prepared By: Fizi

​Challenge Author(s): Fizi

​Difficulty: <font color=green>Medium</font>

Flag: `Cyberhax{C4n_Y0u_H34R_tH3_wH15TL3?}`

## Synopsis

The challenge involves finding the hidden flag with careful examination of the youtube link and cryptography for decryption.

## Description

Abu left a coded message within his favourite pop music video. He said try not to overthink it, what does he mean by that? Can you find the flag after clicking the link?

Flag example: `Cyberhax{3xmp13_f14g_h3r3}`

https://www.youtube.com/watch?v=BbeeuzU5Qc8Q3liZXJoYXh7QzRuX1kwdV9IMzRSX3RIM193SDE1VEwzP30=


## Skills Required
- Detailed inspection of the given link
- Basic cryptography 

## Skills Learned
- Know that we can hide messages within a youtube link
- Base64 decryption

## Challenge Overview

1. Opening the YouTube Link:
   - Click on the provided YouTube link. However, it's important to note that legitimate youtube videos typically don't contain hidden vulnerabilities.

2.URL Inspection:
  - As the video begins to load, observe the URL displayed in the address bar of your web browser. You'll notice that the link shortens as the video loads.

3.Character Extraction:
  - The shortening of the link suggests that certain characters within the URL are being omitted and are not part of the genuine YouTube link. Methodically extract these omitted characters.

4. Get Flag:
 - The extracted part appears to be encoded using Base64.
 - Decode to reveal the flag.
 

