# Quick Start: Deploy Ikechi Global to Vercel

## Pre-Deployment Checklist

### 1. **Verify Git Repository**
```powershell
# Check git status
git status

# Ensure all files are tracked
git add .
```

### 2. **Check for Issues**
- [ ] All PHP files are present and accessible
- [ ] All CSS and JS files are in correct directories (`/css`, `/js`)
- [ ] All image paths start with `/images/`
- [ ] Header includes work correctly
- [ ] No hardcoded localhost URLs in code

### 3. **Verify Asset Paths**
Ensure all assets use absolute paths (starting with `/`):
- ✅ `/css/styles.css`
- ✅ `/js/script.js`
- ✅ `/images/hero/image.jpg`

### 4. **PHP Configuration**
The `vercel.json` includes:
- PHP memory limit: 256MB
- All PHP files explicitly listed
- Static asset routing configured

## Deployment Steps

### Step 1: Commit Changes to Git
```powershell
git add .
git commit -m "Configure for Vercel deployment"
git push origin main
```

### Step 2: Connect to Vercel
1. Go to **[vercel.com](https://vercel.com)** and log in
2. Click **"Add New..."** → **"Project"**
3. Select your **GitHub repository** (ikechiglobal)
4. Vercel will auto-detect PHP configuration
5. Click **"Deploy"**

### Step 3: Wait for Build
- Build logs will display in real-time
- Typical build time: 1-3 minutes
- Check for any PHP errors or missing files

### Step 4: Test Your Site
Once deployed:
1. Visit the provided Vercel URL (e.g., `https://ikechiglobal-username.vercel.app`)
2. Test all pages:
   - [ ] Homepage (index.php)
   - [ ] About page
   - [ ] Services pages
   - [ ] Projects page
   - [ ] Contact page
3. Verify CSS/JS loads correctly
4. Check console for errors (F12)

### Step 5: Add Custom Domain (Optional)
1. In Vercel project settings
2. Go to **Domains**
3. Add your custom domain
4. Follow DNS configuration instructions

## Important Notes

### What's Included
- ✅ 11 PHP pages configured for Vercel
- ✅ Static asset routing (CSS, JS, images)
- ✅ URL rewriting for clean URLs
- ✅ `.htaccess` for Apache compatibility
- ✅ `.vercelignore` to optimize build size

### File Path Corrections Required
If you see 404 errors for CSS/JS:
1. Check that paths in HTML are absolute (`/css/`, not `./css/`)
2. Verify files exist in correct directories
3. Clear browser cache (Ctrl+Shift+Del)

### Environment Variables (If Needed Later)
Add in Vercel dashboard → Settings → Environment Variables:
```
KEY=VALUE
```

## Troubleshooting

### Issue: Page shows blank or 502 error
**Solution**: 
- Check `/api` directory exists
- Verify all PHP syntax is correct
- Check Vercel build logs

### Issue: CSS/Images not loading
**Solution**: 
- Confirm all paths start with `/`
- Check `.vercelignore` isn't excluding needed files
- Verify file paths don't have spaces

### Issue: Header include not working
**Solution**: 
- Use `include_once()` with relative paths (current setup is correct)
- Ensure header.php exists in project root

## Post-Deployment

### Monitor Performance
1. Check Vercel Analytics dashboard
2. Monitor build times
3. Watch for PHP errors in logs

### Update Site
1. Make changes locally
2. Commit and push to main branch
3. Vercel auto-deploys on push

### Scaling (If Needed)
- Standard Vercel deployment handles most traffic
- Monitor usage and upgrade plan if needed

---

**Need Help?**
- Vercel Docs: https://vercel.com/docs
- PHP on Vercel: https://vercel.com/docs/runtimes/php
- Support: vercel.com/support
