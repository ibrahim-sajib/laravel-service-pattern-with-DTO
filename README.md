# Laravel + Service Pattern + DTO

## Overview

This repository illustrates a Laravel project that employs the Service Pattern and Data Transfer Objects (DTOs) to handle blog-related operations. The overall goal is to show a clean and sustainable architecture by separating concerns and reuse.

## Components

### Blog Controller

The `BlogController` is responsible for handling HTTP requests and interacting with the `BlogService`. It uses the Service Pattern to encapsulate business logic and delegates data handling to the `BlogDto`.

#### Methods:

- **store(BlogRequest $request): BlogResource**
  - Responsible for storing a new blog post.
  - Utilizes the `BlogDto` to extract and validate data from the incoming `BlogRequest`.
  - Returns a `BlogResource` representing the newly created blog.

- **update(BlogRequest $request, Blog $blog): BlogResource**
  - Handles updating an existing blog post.
  - Utilizes the `BlogDto` to extract and validate data from the incoming `BlogRequest`.
  - Returns a `BlogResource` representing the updated blog.

### Blog Service

The `BlogService` encapsulates the business logic related to blog operations. It is responsible for interacting with the database and handling the storage and updating of blog posts.

#### Methods:

- **store(BlogDto $dto): Blog**
  - Creates a new blog post using the provided `BlogDto`.
  - Returns the created `Blog` instance.

- **update(Blog $blog, BlogDto $dto): Blog**
  - Updates an existing blog post with data from the provided `BlogDto`.
  - Returns the updated `Blog` instance.

### Blog DTO

The `BlogDto` (Data Transfer Object) is responsible for encapsulating and transferring data between different layers of the application. It is used to validate and structure incoming data from various sources.

#### Properties:

- **title (string):** The title of the blog post.
- **body (string):** The body/content of the blog post.
- **source (BlogSource):** An enum representing the source of the blog post (App or Api).

#### Methods:

- **fromAppRequest(AppBlogRequest $request): BlogDto**
  - Creates a `BlogDto` instance from an application-level request (`AppBlogRequest`).
  
- **fromApiRequest(ApiBlogRequest $request): BlogDto**
  - Creates a `BlogDto` instance from an API-level request (`ApiBlogRequest`).

## Usage

To use this architecture as a foundation for your Laravel projects, follow these steps:

1. **Controller:**
   - Create a controller that extends the base controller and injects your service.

2. **Service:**
   - Implement your business logic within a service class.

3. **DTO:**
   - Define DTOs to encapsulate and validate data transfer between layers.

4. **Routes:**
   - Define routes in your `web.php` or `api.php` file to map HTTP requests to controller methods.

## Note

Ensure you have the necessary dependencies installed and configured.