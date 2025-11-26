# Mine Reporter

A web-based application for reporting and managing mine field information with role-based access control.

## Features

- **Role-Based Access Control**: Three user roles (Searcher, Supervisor, Manager)
- **Mine Reporting**: Report mine locations with coordinates, types, and quantities
- **Civilian Reports**: Handle civilian-submitted mine reports
- **Field Management**: Manage different mine fields and types
- **Report Tracking**: Track pending, approved, and rejected reports

## User Roles

- **Searcher**: Submit new mine reports and view previous reports
- **Supervisor**: Review pending reports, accept/reject responses
- **Manager**: Manage users, fields, mines, and civilian reports

## Installation

1. Clone the repository:
   ```bash
   git clone <your-repository-url>
   cd mine_reporter
   ```

2. Set up the database:
   - Import the SQL file `mine_reporter (1).sql` into your MySQL database, or
   - Run `db.php` in your browser to automatically create the database and tables

3. Configure database connection:
   - Update database credentials in `db.php` if needed (default: localhost, root, no password)

4. Start your PHP server:
   ```bash
   php -S localhost:8000
   ```

5. Access the application at `http://localhost:8000`

## Database Structure

- **users**: User accounts with roles
- **mines**: Mine types and descriptions
- **fields**: Mine field locations
- **reports**: Mine reports submitted by searchers
- **civilian_reports**: Reports from civilians
- **responses**: Responses to mine reports

## Technologies Used

- PHP
- MySQL
- Bootstrap 5
- JavaScript/jQuery

## License

This project is for educational/demonstration purposes.
