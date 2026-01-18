Finance App - Smart Management
A responsive financial management system focused on cash flow, expense classification (Essential vs. Non-Essential), and investment goal tracking.

🚀 Project Status
This project follows the Scrum methodology. Currently, the base infrastructure (Docker/Laravel) is completed.

🛠️ Tech Stack
Back-end: Laravel 11 (PHP 8.2+)

Database: MySQL 8.0

Infrastructure: Docker & Docker Compose

Front-end: Tailwind CSS & Blade Templates

Charts: Chart.js

⚙️ Environment Setup (Local)
To run this project locally, follow these steps:

Clone the repository:

Bash

git clone https://github.com/your-username/your-project.git
cd your-project
Environment Configuration:

Copy the example file: cp .env.example .env

Configure ports and credentials in .env as documented in Jira.

Spin up containers:

Bash

docker-compose up -d
Install dependencies and generate key:

Bash

docker exec -it [container_name] composer install
docker exec -it [container_name] php artisan key:generate
Run Migrations:

Bash

docker exec -it [container_name] php artisan migrate
📋 Mapped Features (Jira Epics)
MF-6 Authentication & Users: Secure access management.

MF-38 Spending Balance: Real-time logic for calculating free-to-spend balance.

MF-43 Expense Control: Classification between Essential and Non-Essential spending.

MF-13 Charts & Reports: Financial data visualization.

🔒 Security & Privacy
The project implements data isolation policies (Owner Only) and strict input validation to ensure financial integrity.
