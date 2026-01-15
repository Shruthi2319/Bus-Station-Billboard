# Bus Station Billboard and Admin Bus Tracking System

## Project Overview
This project is a simple bus tracking and billboard display system designed for use in local bus stations. It demonstrates how a central admin control room can update a bus’s position and status, while a public-facing digital billboard displays live bus information for passengers.

The system uses a dummy map-based tracking approach to simulate bus movement and updates. It is built using core web technologies without external frameworks.



## Key Objectives
- Simulate live bus tracking using dummy map coordinates
- Display bus arrival information on a digital billboard
- Allow admin control over bus movement
- Demonstrate frontend and backend integration using PHP and MySQL



## Features
- Admin control panel with map-based bus movement
- Public billboard displaying bus arrival status
- Dummy Google Maps-style tracking simulation
- Auto-updating billboard data using JavaScript
- Clean and readable UI suitable for large display screens
- Simple and extendable architecture



## Technology Stack
- Frontend: HTML, CSS, JavaScript
- Backend: PHP
- Database: MySQL
- Server: Apache (XAMPP)



## Project Structure
bus-billboard/
├── admin.php (Admin control room with map tracking)
├── index.php (Public bus station billboard)
├── db.php (Database connection file)
├── update_bus.php (Updates bus coordinates in database)
├── script.js (Billboard data rotation logic)
├── style.css (Billboard styling)
├── images/
│ ├── map.png
│ ├── track.png
│ └── bus_logo.jpeg
└── readme.md

