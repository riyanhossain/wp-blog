<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>

    <?php wp_head() ?>
</head>

<body class="bg-white antialiased flex flex-col min-h-screen">
    <?php wp_body_open(); ?>
    <header class="bg-gray-800 text-white">
        <div class="flex justify-between items-center p-5  container mx-auto">
            <div>
                <a href="/">
                    <h1 class="text-2xl font-bold">My Blog</h1>
                </a>
            </div>
            <nav>
                <ul class="flex space-x-4 text-white">
                    <li><a href="#" class="hover:text-gray-400">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>