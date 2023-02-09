
# Ecommerce Website 

It is a webite where a user can purchase products. Having functionalities like Landing page, Product Details page, Add to cart, Login and Registeration page.


## Screenshots

1. Landing Page:

![Screenshot (6)](https://user-images.githubusercontent.com/124838230/217867938-131c833c-3c71-4bce-866c-3cf862ee4a82.png)

2. Item Filter:

![Screenshot (7)](https://user-images.githubusercontent.com/124838230/217868343-8fe007af-f6da-4413-936b-c1ea47a79266.png)

3. Product Description Page:

![Screenshot (11)](https://user-images.githubusercontent.com/124838230/217868475-e0ffba81-7c88-4157-a705-e0ff16f8fd75.png)

4. Cart Page:

![Screenshot (8)](https://user-images.githubusercontent.com/124838230/217868649-37ef223a-4dba-4e54-828c-da892bd40a12.png)

5. Login Page:

![Screenshot (9)](https://user-images.githubusercontent.com/124838230/217868916-8dd23de2-c176-4f3c-b56d-4df7af4a6378.png)


6. Register Page:

![Screenshot (10)](https://user-images.githubusercontent.com/124838230/217868972-af947586-844a-44dd-8184-355ae590ed91.png)


## Features

- Responsive Website
- Dynamic Website(frontend and backend connected)
- Cross platform


## Tech Stack

**Client:** HTML, CSS, JavaScript

**Server:** PHP, MySQL


## Demonstration Video

- Frontend part of the project:

https://user-images.githubusercontent.com/124838230/217877318-57b5aeb6-034f-4ce8-953c-47327668ce8a.mp4

- Backend part of the project:

https://user-images.githubusercontent.com/124838230/217879376-cf74a195-6188-4a9d-b743-b1f8bb5c30d5.mp4


## Database Demonstration

In this project database have created 5 tables:

| tables | attributes | 
| --- | --- |
| allproduct | item_id (primery key), type, item_name, item_price, item_image, item_register |
| topoffer | item_id (primery key), type, item_name, item_price, item_image, item_register |
| fresharrival | item_id (primery key), type, item_name, item_price, item_image, item_register |
| cart | cart_id (primary key), user_id, item_id |
| user | user_id (primary key), first_name, last_name, email_id, password, register_date |

*[ Note: The item_id must be same in allproduct, topoffer, fresharrival ]*

I have made the item_id same for allproduct, topoffer, fresharrival table to interlink the items present in those 3 tables. Therefore i have dedicated items_id range to specific category of products:

| category | range | 
| --- | --- |
| Earphones | 100 - 200 |
| Mobiles | 200 - 300 |
| Watches | 300 - 400 |
| Footwares | 400 - 500 |

## Installation

I used Xampp server to run my MySQL Database server. And Used VScode to write code ,render and visualize the porject.

Links to Download:

Xampp Server: https://www.apachefriends.org/index.html

VScode: https://code.visualstudio.com
    
## Deployment


1. Install the Xampp server and go to the directory where Xampp dependencies are present. Locate the htdoc directory and make a directory inside it. Put all the resources which is Downloaded from this repository. As shown below.



https://user-images.githubusercontent.com/124838230/217869553-0a8a3f07-d92d-4c6b-9179-be3572bbad8c.mp4



2. Fireup  the Xampp and click on start for apache and MySQL server. Then click on the admin button present next to it. It will redirect you to phpadmin page in your respective browser. As shown below.



https://user-images.githubusercontent.com/124838230/217870321-288b6d11-3f58-4df0-b7f4-c91e79dca398.mp4



3. click on new  present on the left hand side, under the create database make a database name it as "mybazaar". Then click on create button. As shown below.



https://user-images.githubusercontent.com/124838230/217870533-597a75c6-f2e1-4637-a797-8471620e6ac0.mp4



4. Your database is now created it will be visible on left hand side of your browser, click on that. You will get a empty database. On the top navigation bar you will get a import button click on that. As shown below.



https://user-images.githubusercontent.com/124838230/217870742-c724a6b6-06d3-42c5-8a2a-b04e08d88f6d.mp4



5. Click on choose file button and add the mybazaar_layout.sql file which is there in the database directory in the repository, which we have copied in htdoc directory. As shown below.



https://user-images.githubusercontent.com/124838230/217871010-d3b3f92f-c332-459b-a30e-f712ca9ca495.mp4



6. Then scroll down you will find a import button click on import button. As shown below.



https://user-images.githubusercontent.com/124838230/217871051-74077650-c747-4a1c-a508-ae5d8e9d7c83.mp4


7. Then in the respective browser type **localhost/Ecommerce-Website-master/index.php**. As shown below



https://user-images.githubusercontent.com/124838230/217876999-5a333d3a-8cce-4233-a648-915a3abe3e28.mp4



Wala!! All Set to go.


## Support

For support, email work.soumya001@gmail.com.

