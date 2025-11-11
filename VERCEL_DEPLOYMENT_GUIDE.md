# Vercel Deployment Guide - Ikechi Global Services

## Overview
This is a PHP-based website configured for deployment on Vercel. The site includes multiple service pages, project portfolio, and client information.

## Project Structure
```
ikechiglobal/
├── api/                          # API endpoints (future expansion)
├── css/                           # Stylesheets
├── images/                        # Image assets
├── js/                            # JavaScript files
├── clients/                       # Client-related files
├── index.php                      # Homepage
├── about.php                      # About page
├── contact-us.php                 # Contact page
├── projects.php                   # Projects page
├── services.html                  # Services page (static)
├── [service]-services.php         # Service detail pages
└── header.php                     # Reusable header component
```

## Files for Vercel Configuration

### vercel.json
Defines build and routing configuration for Vercel:
- **builds**: Specifies which files use PHP runtime
- **routes**: Defines URL routing rules and static asset handling
- **env**: Environment variables (e.g., PHP memory limit)

### .vercelignore
Lists files to exclude from deployment to reduce build size.

### .htaccess
Enables URL rewriting for clean URLs and routing fallback to index.php.

## Deployment Steps

### 1. Prerequisites
- Git repository initialized
- GitHub account connected to Vercel
- Repository pushed to GitHub

### 2. Deploy to Vercel
1. Visit [vercel.com](https://vercel.com)
2. Click "New Project"
3. Select your GitHub repository
4. Vercel will auto-detect PHP and use the settings from `vercel.json`
5. Click "Deploy"

### 3. Domain Configuration (Optional)
- Add your custom domain in Vercel project settings
- Update DNS records as instructed by Vercel

## Features Supported
✅ PHP server-side rendering
✅ Static asset serving (CSS, JS, images)
✅ URL rewriting for clean URLs
✅ Serverless function support (for future API endpoints)
✅ Automatic HTTPS
✅ Environment variables support

## Current Includes & Dependencies
- Bootstrap 5.3.0 (CDN)
- Font Awesome 6.4.0 (CDN)
- Owl Carousel 2.3.4 (CDN)
- AOS (Animate On Scroll) 2.3.4 (CDN)
- jQuery 3.5.1 (local)

## Notes
- All external libraries are loaded from CDN for optimal performance
- PHP files use `include_once()` for header component
- Responsive design implemented with Bootstrap
- JavaScript functionality uses jQuery and vanilla JS

## Troubleshooting

### Issue: 404 errors on page refresh
**Solution**: Ensure `.htaccess` routing is configured correctly. Vercel automatically handles this through `vercel.json` routes.

### Issue: CSS/JS not loading
**Solution**: Check that asset paths are absolute (starting with `/`). All paths should start with `/css/`, `/js/`, or `/images/`.

### Issue: PHP includes not working
**Solution**: Ensure all `include_once()` paths are relative to the project root or absolute paths starting with `/`.

## Performance Optimization
- Consider caching static assets in Vercel
- Compress images for better load times
- Lazy load images where appropriate
- Monitor build size and deployment time

## Future Enhancements
- Add API endpoints in `/api` directory for contact forms
- Implement database integration for dynamic content
- Add authentication for admin panel
- Set up automated testing and deployment pipelines
