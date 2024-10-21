
# Swoole MVC Framework

A lightweight and fast framework for implementing the MVC architecture using **Swoole** in PHP.

This project is designed to provide a basic structure for PHP web projects using **Swoole**. It simplifies the process of developing fast and scalable websites, allowing you to easily leverage the powerful features of **Swoole**.

## Features

- **MVC Architecture**: Logical separation of views, controllers, and models.
- **Swoole Support**: Utilize the advanced, scalable features of Swoole for high performance.
- **Autoloading**: Classes are automatically loaded.
- **Request/Response Handling**: Simplified management of HTTP requests and responses.
- **Easy Configuration**: Configuration is stored in separate, easily accessible files.
- **High Speed**: Thanks to Swoole, this framework offers better performance compared to regular PHP.

## Installation

To install this project, follow these steps:

1. Clone the repository:
   ```bash
   git clone https://github.com/morisfa2/swoole-mvc.git
   ```

2. Navigate to the project folder:
   ```bash
   cd swoole-mvc
   ```

3. Install dependencies:
   ```bash
   composer install
   ```

4. Run the server using the following command:
   ```bash
   php index.php
   ```

## Usage

### Directory Structure
```
swoole-mvc/
│
├── app/                # Core application code (Controllers, Models, etc.)
│   ├── Controllers/    # Controllers
│   ├── Models/         # Models
│
├── config/             # Project configurations
│
│
├── index.php   # Entry point for the Swoole server
│
└── composer.json       # Composer configuration
```

### Example Usage

Here’s a simple example of how to use this framework.

**Controller Example:**
```php
namespace App\Controllers;

use App\Models\ExampleModel;

class ExampleController
{
    public function index()
    {
        $model = new ExampleModel();
        return $model->getData();
    }
}
```

**Model Example:**
```php
namespace App\Models;

class ExampleModel
{
    public function getData()
    {
        return "Hello, World!";
    }
}
```

**View Example:**

Views can easily retrieve data from controllers and display it as HTML.

---

## Documentation

- For more information on how to use Swoole and its features, visit the [official Swoole documentation](https://www.swoole.co.uk/docs).
- For more details on the MVC architecture, check out [MVC documentation](https://en.wikipedia.org/wiki/Model%E2%80%93view%E2%80%93controller).

## Contributing

If you'd like to contribute to this project, please follow these steps:

1. Fork this repository.
2. Create a new branch for your changes.
3. Submit a Pull Request.
