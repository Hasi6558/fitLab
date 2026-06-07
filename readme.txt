# FitLab — Gym Website
 
FitLab is a gym website built with PHP, HTML, CSS, and JavaScript, backed by a MySQL database. It allows visitors to browse the gym's services, view personal trainer profiles, and explore membership plans. Registered members can log in and book training sessions from a weekly schedule, with session availability tracked in real time.
 
## Main Functionalities
 
- **Home page** — Hero section, image gallery, semi-private training introduction, team showcase, member reviews, and a "Why FitLab" section
- **User registration & login** — Members sign up with their name, gender, email, address, and password. Passwords are hashed with MD5. Each new member is given 3 sessions on sign-up
- **Session management** — PHP sessions keep users logged in across pages; the navbar dynamically shows the user's name and a logout button when authenticated
- **Session booking** — A weekly timetable (5 time slots × 7 days = 35 sessions) shows live spot availability pulled from the `training_sessions` database table. Logged-in users can book a slot; a booking limit of 3 is enforced via `localStorage`
- **Membership pricing** — Six membership tiers ranging from 1 session ($40) to a 96-session annual plan ($2,300)
- **Personal trainers** — A dedicated page listing trainer profiles with name, specialisation, and contact details
- **Terms & conditions** — Full terms covering bookings, cancellations, refunds, rescheduling, health, and liability
- **Protected booking page** — Redirects unauthenticated users to login before they can access the booking schedule
---
 
## Tech Stack
 
| Layer | Technology |
|---|---|
| Backend | PHP (procedural) |
| Database | MySQL (via `mysqli`) |
| Frontend | HTML, CSS, Vanilla JavaScript |
| Fonts | Google Fonts (Poppins) |
| Icons | Font Awesome 6 |
 
---
 
## Project Structure
 
```
FitLab-GymWebsite/
├── index.php                  # Home page
├── login.php                  # Login form & authentication
├── registration.php           # Registration form & user creation
├── logout.php                 # Session destroy & redirect
├── booking.php                # Session booking timetable (auth-protected)
├── price.php                  # Membership pricing page
├── personal_trainer.php       # Trainer profiles page
├── terms_and_condition.php    # Terms & conditions
├── database.php               # DB connection + user table creation
├── script.js                  # Homepage scripts
├── registrationscript.js      # Client-side form validation
├── style.css                  # Home page styles
├── loginStyle.css
├── registrationStyle.css
├── bookingStyle.css
├── pricestyle.css
├── personalTrainerStyle.css
├── terms_and_condition_styling.css
├── images/                    # Webp/JPG images used across pages
└── Asset/                     # Team photos and icon assets
```
 
---
 
## Prerequisites
 
- PHP 7.4+
- MySQL 5.7+
- A local server environment such as [XAMPP](https://www.apachefriends.org/) or [WAMP](https://www.wampserver.com/)
---
 
## Getting Started
 
### 1. Clone the repository
 
```bash
git clone https://github.com/Hasi6558/FitLab-GymWebsite.git
```
 
### 2. Move the project to your server root
 
Place the `FitLab-GymWebsite` folder inside your server's web root:
 
- **XAMPP:** `C:/xampp/htdocs/`
- **WAMP:** `C:/wamp64/www/`
### 3. Create the database
 
Open **phpMyAdmin** and create a new database named `dbfitlab`.
 
The `user` table is created automatically when `database.php` is first included (on any page load).
 
For the booking page to show live spot counts, create the `training_sessions` table manually:
 
```sql
CREATE TABLE training_sessions (
    sid INT PRIMARY KEY,
    no_of_spots INT DEFAULT 2
);
 
-- Populate all 35 sessions
INSERT INTO training_sessions (sid, no_of_spots)
VALUES
  (1,2),(2,2),(3,2),(4,2),(5,2),(6,2),(7,2),
  (8,2),(9,2),(10,2),(11,2),(12,2),(13,2),(14,2),
  (15,2),(16,2),(17,2),(18,2),(19,2),(20,2),(21,2),
  (22,2),(23,2),(24,2),(25,2),(26,2),(27,2),(28,2),
  (29,2),(30,2),(31,2),(32,2),(33,2),(34,2),(35,2);
```
 
### 4. Update the database credentials
 
Open `database.php` and update the credentials to match your local MySQL setup:
 
```php
$server   = "localhost";
$username = "root";
$password = "your_password";
$db_name  = "dbfitlab";
```
 
### 5. Run the site
 
Start Apache and MySQL in XAMPP/WAMP, then open:
 
```
http://localhost/FitLab-GymWebsite/
```
 
---
 
## Pages
 
| URL | Description |
|---|---|
| `index.php` | Home |
| `registration.php` | Sign up |
| `login.php` | Sign in |
| `logout.php` | Sign out |
| `booking.php` | Book a training session (login required) |
| `price.php` | Membership plans |
| `personal_trainer.php` | Trainer profiles |
| `terms_and_condition.php` | Terms & conditions |
 
---
 
## License
 
© 2024 Hasindu Liyanage. All rights reserved.
