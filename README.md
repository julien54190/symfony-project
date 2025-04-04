Quora-Like - Symfony Project

# Welcome to Quora-Like, a web application inspired by Quora that allows users to ask questions, respond, and vote for the best answers.

✨ Features

📅 Questions Listing Page: Displays recent questions with votes and answers.

📜 Question Details Page: View a question with its answers and interact with them.

🗓️ Create Questions: Add a new question with validation.

💬 Response and Validation System: Users can comment and validate questions.

🔄 Voting System: Upvote/downvote answers to highlight the most relevant ones.

🔑 Authentication: User registration and login.

👤 User Profile: Profile page with photo and activity history.

🤖 Technologies Used

Symfony 6 (PHP Framework)

Doctrine ORM (Database Management)

Twig (Template Engine)

Bootstrap (Frontend Styling)

MySQL (Database)

🚀 Installation

1. Clone the Project

git clone https://github.com/julien54190/symfony-project.git
cd symfony-project

2. Install Dependencies

composer install

3. Configure the Database

Create a .env.local file and update the following line with your database credentials:

DATABASE_URL="mysql://user:password@localhost:3306/database_name"

Then execute:

php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate

4. Start the Symfony Server

symfony serve

The application will be available at http://127.0.0.1:8000

🔧 Usage

Home Page: List of questions.

Question Details: View and respond to questions.

Add a Question: Post a new question.

Voting: Rate the best answers.

Login / Register: Create an account and log in.

Profile: Access your personal space.

✨ Future Enhancements

Real-time notifications

Advanced filtering and search

User following and subscriptions

© Creator

Project developed by Julien Lucadallo as part of a Symfony development training program.

