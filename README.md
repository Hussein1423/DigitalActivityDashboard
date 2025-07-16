
---

```markdown
# 📊 Laravel Dashboard API Integration

A modular and interactive dashboard built with Laravel and Livewire that aggregates data from multiple external APIs like Notion, YouTube, Udemy, GitHub, LinkedIn, and Laravel/Livewire documentation.

## 🚀 Features
- 🎥 **YouTube** – Shows channel stats and recent content using YouTube Data API.
- 🐱 **GitHub** – Displays public GitHub profile stats.
- 📰 **Tech News** – Scrapes latest Laravel and Livewire docs updates.
- ⚙️ **Clean Architecture** – Services, Repositories, and Livewire components.
- 🧩 **Expandable** – Add new APIs or cards with minimal changes.

---

## 🛠 Technologies

- PHP 8.x
- Laravel 10.x
- Livewire 3
- MySQL
- RapidAPI
- Bootstrap 5 (for UI)

---

## 📂 Project Structure

```

app/
├── Http/
│   ├── Controllers/         # Dashboard API controller
│   └── Livewire/Dashboard/  # UI cards for each API
├── Services/                # API logic (YouTube, Notion, etc.)
├── Repositories/            # Central data access layer
routes/
├── api.php                  # Dashboard API endpoint
resources/views/livewire/    # Blade views for each card

````

---

## 🔧 Setup Instructions

1. **Clone the Repository**

```bash
git clone https://github.com/your-username/laravel-dashboard.git
cd laravel-dashboard
````

2. **Install Dependencies**

```bash
composer install
npm install && npm run build
```

3. **Configure Environment**

```bash
cp .env.example .env
php artisan key:generate
```

4. **Set API Keys in `.env`**

```
NOTION_API_KEY=your_notion_key
NOTION_DATABASE_ID=optional
YOUTUBE_API_KEY=your_youtube_key
YOUTUBE_CHANNEL_ID=channel_id_here
GITHUB_USERNAME=your_github_username
UDEMY_RAPIDAPI_KEY=your_rapidapi_key
```

> You can obtain Udemy API keys from [RapidAPI](https://rapidapi.com/).

5. **Run the Server**

```bash
php artisan serve
```

---

## 📲 API Access

A single endpoint returns all dashboard data in JSON:

```
GET /api/dashboard
```

---

## 📸 UI Preview

> Add screenshots here for each card
> (You can paste directly into GitHub or use `![screenshot](link)`)

---

## 🤝 Contributing

Feel free to open issues or submit PRs to improve this project.

---

## 📄 License

This project is open-sourced under the [MIT license](LICENSE).

---

## ✨ Author

Built with ❤️ by [Hussein Qaid](https://github.com/Hussein1423)
