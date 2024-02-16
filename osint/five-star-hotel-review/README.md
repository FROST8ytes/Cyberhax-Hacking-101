![img](../../assets/banner.png)

<img src="../../assets/cyberhax.png" style="margin-left: 20px; zoom: 80%;" align=left />
<font size="10">5 Star Hotel Review</font>

9<sup>th</sup> February 2024

​Prepared By: Fizi

​Challenge Author(s): Fizi

​Difficulty: <font color=green>Medium</font>

Flag: `Cyberhax{Lavender_MRT}`

## Synopsis

The challenge involves with OSINT & Stalking Skills to find the flag just from an image posted online.

## Description

Put in the nearest metro that the user suggests for traveller.

Flag example: `Cyberhax{Redhill_MRT}`


## Skills Required

- Basic stalking skills
- Google Lens 
- Google Map

## Skills Learned

- Location investigation
- Finding valuable information from a website to find the flag

## Challenge Overview

1. Initial Inspection:
  - The challenge provides an image (pool.webp) from a hotel review somewhere on the internet

2. Image Analysis:
  - Utilize Google Lens to find the source of the image. by Right-Click on the image and click "Search image with Google"
  - Based on the result, it appears that the image is from Hotel Boss from Trip.com.

![osint1](https://github.com/FROST8ytes/Cyberhax-Hacking-101/assets/131322679/3541c9e1-6fe0-4168-b7b9-f05856ac6109)


3. Stalking:
  - Navigate to the Hotel Boss website on Trip.com
    ![osint](https://github.com/FROST8ytes/Cyberhax-Hacking-101/assets/131322679/3eadd334-d502-4634-bfc1-80e6dbc4ec16)
  - There are many ways to solve the challenge:

a) Finding the actual picture posted and its review:
- Go to Hotel Boss page on Trip.com and click "See All Photos" to find the user posted image
- Click on the User Upload 
- Find the exact image and its reviews to find the MRT that the user suggest
![osint23](https://github.com/FROST8ytes/Cyberhax-Hacking-101/assets/131322679/04573c0a-c2d8-4e09-a166-4495ef66db6e)
![osint3](https://github.com/FROST8ytes/Cyberhax-Hacking-101/assets/131322679/c64cd5f8-fd73-4669-b433-ca6032570b22)

b)From the Hotel Website
- Most hotel website usually provide information regarding nearest Metro Station, Airport & Attraction.
- Navigate to Location
- Notice that Metro: Lavender (360m) is the nearest compare to others
  
![osint](https://github.com/FROST8ytes/Cyberhax-Hacking-101/assets/131322679/263f073d-cf8b-4f52-ba4b-ef4429d15aae)
![osint1](https://github.com/FROST8ytes/Cyberhax-Hacking-101/assets/131322679/73a9b51f-5028-486c-bdcb-ab3daafada24)

c) Google Map
- We know that the image is from Hotel Boss
- Search for Hotel Boss on Google Map and click on "Nearby" to find nearby MRT
- Find the closest distance MRT

![osint](https://github.com/FROST8ytes/Cyberhax-Hacking-101/assets/131322679/35047f74-9c12-4a59-9623-a4046fa96400)
![osint2](https://github.com/FROST8ytes/Cyberhax-Hacking-101/assets/131322679/4c5d9865-c0fc-4553-b828-3d90d19ead8f)


5. Get Flag:
  - Put in the MRT station into the flag format given.
