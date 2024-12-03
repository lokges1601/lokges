<?php
include("simple_html_dom.php"); // Include the Simple HTML DOM Parser
set_time_limit(500); // Set a higher script execution time limit to handle large pages
$html = file_get_html("https://www.theverge.com/"); // Fetch the homepage of The Verge

$arr = []; // Array to store articles

// Loop through each article block on the homepage
foreach ($html->find('div[data-chorus-optimize-id]') as $article) {
    $tmp = [];
    $titleElement = $article->find('h2 a', plaintext); // Find the title link
    $title = $titleElement ? trim($titleElement->plaintext) : "No title"; // Get the title text
    $link = $titleElement ? "https://www.theverge.com" . $titleElement->href : ""; // Get the full link

    // Check if a date is available, otherwise set a default
    $dateElement = $article->find('time', 0);
    $date = $dateElement ? $dateElement->datetime : "No date"; // Get publication date if available

    // Filter articles published after January 1, 2022
    if (strtotime($date) >= strtotime("2022-01-01")) {
    // Add the article to the list if it is from January 1, 2022, or later
    $tmp["title"] = $title;
    $tmp["link"] = $link;
    $tmp["date"] = $date;
    $arr[] = $tmp;
    }

}

// Sort articles by date in descending order (latest first)
usort($arr, function ($a, $b) {
    return strtotime($b['date']) - strtotime($a['date']);
});

// Output the articles in HTML format
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Verge Headlines (From Jan 1, 2022)</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff;
            color: #000;
            margin: 20px;
            text-align: center;
        }
        h1 {
            margin-bottom: 20px;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin: 10px 0;
        }
        a {
            text-decoration: none;
            color: #007BFF;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>The Verge Headlines (From Jan 1, 2022)</h1>
    <?php if (count($arr) > 0): ?>
        <ul>
            <?php foreach ($arr as $article): ?>
    <li>
        <a href="<?php echo htmlspecialchars($article['link']); ?>" target="_blank">
                <?php echo htmlspecialchars($article['title']); ?>
        </a> - <?php echo htmlspecialchars($article['date']); ?>
    </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>No articles found from January 1, 2022, onwards.</p>
    <?php endif; ?>
</body>
</html>
