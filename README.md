# MyStocks

A personal stock-tracking app: a watchlist with live prices and the latest news for each
holding, all on one page.

> **Status: early development.** The landing page is built. The data layer and user accounts
> come next.

## Done so far

- Responsive landing page (`Index.PHP`) with a hero section, feature overview and call to action
- Session-aware header ready for login state (`$isLoggedIn`, user name, avatar)
- Custom CSS design system: layered background, card layout, responsive grid. No framework.

## Planned

- Accounts and a per-user watchlist (PHP + MySQL)
- Live quotes and company news from a market-data API
- Per-stock detail page with a price chart
- Price alerts

## Tech

PHP, HTML, CSS, vanilla JavaScript. MySQL planned for persistence.

## Run locally

Clone the repo into a PHP server's web root (for example XAMPP's `htdocs/`), then open
`http://localhost/MyStocks/Index.PHP`.
