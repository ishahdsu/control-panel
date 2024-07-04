# control-panel

This Task provides a web-based interface to control a robot's movements and logs each command in a MySQL database. It consists of two main components: an HTML file that serves as the user interface and a PHP file that handles the backend processing and database logging.

How It Works:

1- The user opens the HTML page (myrobot.html) in a web browser.
2- The user clicks one of the movement buttons (e.g., "Forward").
3- A JavaScript function captures the button click and sends an asynchronous POST request to the PHP script (log_press.php) with the movement command.
4- The PHP script receives the command, connects to the MySQL database, and inserts the command into the robot table.
5- The database logs each command with a unique ID, allowing for tracking and history of commands sent to the robot.
