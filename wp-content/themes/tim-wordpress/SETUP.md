# Setup Guide for TIM WordPress Theme

## Overview

This guide provides step-by-step instructions for setting up the TIM WordPress theme, migrated from Nuxt.js. It covers theme activation, configuration, content creation, and troubleshooting.

## Table of Contents

1. [Prerequisites](#prerequisites)
2. [Theme Activation](#theme-activation)
3. [Permalink Settings](#permalink-settings)
4. [Navigation Menu Setup](#navigation-menu-setup)
5. [Custom Post Types Overview](#custom-post-types-overview)
6. [Content Creation Guide](#content-creation-guide)
7. [Required Plugins](#required-plugins)
8. [Flushing Rewrite Rules](#flushing-rewrite-rules)
9. [Asset Management](#asset-management)
10. [Troubleshooting](#troubleshooting)

---

## Prerequisites

Before setting up the TIM WordPress theme, ensure you have:

- **WordPress 6.0 or higher** installed
- **PHP 8.0 or higher**
- **MySQL 5.7 or higher** (or MariaDB 10.2 or higher)
- **Node.js 16 or higher** (for development)
- **npm or yarn** package manager
- **FTP/SFTP access** or **file manager access** to your WordPress installation
- **Administrator access** to WordPress admin panel

---

## Theme Activation

### Step 1: Upload Theme Files

1. **Via FTP/SFTP:**
    - Connect to your server
    - Navigate to `wp-content/themes/`
    - Upload the `tim-wordpress` folder
    - Ensure all files and folders are uploaded

2. **Via WordPress Admin:**
    - Go to `Appearance > Themes`
    - Click `Add New`
    - Click `Upload Theme`
    - Select the `tim-wordpress.zip` file
    - Click `Install Now`

### Step 2: Activate Theme

1. Go to `Appearance > Themes`
2. Find the "TIM WordPress" theme
3. Click `Activate`

### Step 3: Verify Activation

1. Visit your homepage
2. Verify the theme is active (you should see the TIM design)
3. Check that all assets are loading (CSS, JavaScript, fonts)

---

## Permalink Settings

The TIM theme requires specific permalink settings to work correctly with custom post types.

### Step 1: Configure Permalinks

1. Go to `Settings > Permalinks`
2. Select **Post name** structure
3. Click `Save Changes`

This will create URLs like:

- `yourdomain.com/resources/articles/article-title`
- `yourdomain.com/resources/blog/blog-post-title`
- `yourdomain.com/resources/media/media-item-title`
- `yourdomain.com/resources/tips/tip-title`

### Step 2: Verify Custom Post Type URLs

After saving permalinks, verify that custom post type URLs work:

1. Create a test post in each custom post type
2. View the post on the frontend
3. Verify the URL structure matches the expected format

**Expected URL Structure:**

- Articles: `/resources/articles/[slug]`
- Blog: `/resources/blog/[slug]`
- Media: `/resources/media/[slug]`
- Tips: `/resources/tips/[slug]`

---

## Navigation Menu Setup

The TIM theme uses two menu locations: **Primary Menu** and **Footer Menu**.

### Step 1: Create Primary Menu

1. Go to `Appearance > Menus`
2. Click `create a new menu`
3. Name it **"Primary Menu"**
4. Click `Create Menu`

### Step 2: Add Menu Items

Add the following pages to the Primary Menu:

**Home**

- Home (link to homepage)

**Programs (Dropdown)**

- Private Training (create page: `/programs/private-training`)
- Speak & Rise (create page: `/programs/speak-rise`)
- Corporate Programs (create page: `/programs/corporate`)
- True Influence License (create page: `/programs/license`)

**About (Dropdown)**

- About Joanna (link to `/about`)
- The Journey (link to `/journey`)

**Success Stories**

- Success Stories (link to `/success-stories`)

**Community (Dropdown)**

- The Vault (link to `/community/vault`)
- Events & Workshops (link to `/community/events`)

**Resources (Dropdown)**

- Articles & Insights (link to `/resources/articles`)
- Speaking Tips (link to `/resources/tips`)
- Media Features (link to `/resources/media`)
- Blog & Podcast (link to `/resources/blog`)

**FAQ**

- FAQ (link to `/faq`)

**Apply**

- Apply (link to `/apply`)

### Step 3: Configure Menu Settings

1. Check the box **"Primary Menu"** under "Menu Settings"
2. Click `Save Menu`

### Step 4: Create Footer Menu

1. Go to `Appearance > Menus`
2. Click `create a new menu`
3. Name it **"Footer Menu"**
4. Add relevant links (e.g., Privacy Policy, Terms of Service, Contact)
5. Check the box **"Footer Menu"** under "Menu Settings"
6. Click `Save Menu`

---

## Custom Post Types Overview

The TIM theme includes four custom post types for managing different types of content.

### 1. Articles

**Purpose:** Articles & Insights content

**URL Structure:** `/resources/articles/[slug]`

**Features:**

- Title
- Content Editor
- Excerpt
- Featured Image
- Custom Fields
- Categories

**Menu Location:** Articles (in WordPress admin sidebar)

**Archive Template:** `archive-articles.php`

**Single Template:** `single-articles.php`

---

### 2. Blog Posts

**Purpose:** Blog & Podcast content

**URL Structure:** `/resources/blog/[slug]`

**Features:**

- Title
- Content Editor
- Excerpt
- Featured Image
- Custom Fields
- Categories
- Reading Time (auto-calculated)

**Menu Location:** Blog Posts (in WordPress admin sidebar)

**Archive Template:** `archive-blog.php`

**Single Template:** `single-blog.php`

---

### 3. Media Items

**Purpose:** Media Features content (interviews, podcasts, videos)

**URL Structure:** `/resources/media/[slug]`

**Features:**

- Title
- Content Editor
- Excerpt
- Featured Image
- Custom Fields
- Categories

**Menu Location:** Media Items (in WordPress admin sidebar)

**Archive Template:** `archive-media.php`

**Single Template:** `single-media.php`

---

### 4. Tips

**Purpose:** Speaking Tips content

**URL Structure:** `/resources/tips/[slug]`

**Features:**

- Title
- Content Editor
- Excerpt
- Featured Image
- Custom Fields
- Categories
- Reading Time (auto-calculated)

**Menu Location:** Tips (in WordPress admin sidebar)

**Archive Template:** `archive-tips.php`

**Single Template:** `single-tips.php`

---

## Content Creation Guide

### Creating Main Pages

#### 1. Homepage

The homepage uses `front-page.php` template. No special setup required.

**Content:**

- Hero section (video background)
- Intro section
- Paths section
- Social proof section
- CTA section

**To Edit:**

1. Edit `front-page.php` directly
2. Or use page template with custom fields (future enhancement)

---

#### 2. About Page

**Steps:**

1. Go to `Pages > Add New`
2. Title: "About Joanna"
3. Content: Add your about content
4. Set page template: (default)
5. Publish

**Template:** `page-about.php`

---

#### 3. Apply Page

**Steps:**

1. Go to `Pages > Add New`
2. Title: "Apply"
3. Content: Add your application form content
4. Set page template: (default)
5. Publish

**Template:** `page-apply.php`

**Form Integration:**

- Install Contact Form 7 plugin
- Create application form
- Add form shortcode to page content

---

#### 4. FAQ Page

**Steps:**

1. Go to `Pages > Add New`
2. Title: "FAQ"
3. Content: FAQ items are hardcoded in template
4. Set page template: (default)
5. Publish

**Template:** `page-faq.php`

**To Edit FAQ Items:**

1. Edit `page-faq.php`
2. Find the FAQ items array
3. Add/edit/remove questions and answers

---

#### 5. Journey Page

**Steps:**

1. Go to `Pages > Add New`
2. Title: "The Journey"
3. Content: Journey phases are hardcoded in template
4. Set page template: (default)
5. Publish

**Template:** `page-journey.php`

**To Edit Journey Phases:**

1. Edit `page-journey.php`
2. Find the phases array
3. Add/edit/remove phase content

---

#### 6. Programs Page

**Steps:**

1. Go to `Pages > Add New`
2. Title: "Programs"
3. Content: Programs are hardcoded in template
4. Set page template: (default)
5. Publish

**Template:** `page-programs.php`

**To Edit Programs:**

1. Edit `page-programs.php`
2. Find the programs array
3. Add/edit/remove program details

---

#### 7. Success Stories Page

**Steps:**

1. Go to `Pages > Add New`
2. Title: "Success Stories"
3. Content: Testimonials are hardcoded in template
4. Set page template: (default)
5. Publish

**Template:** `page-success-stories.php`

**To Edit Testimonials:**

1. Edit `page-success-stories.php`
2. Find the testimonials array
3. Add/edit/remove testimonial content

---

#### 8. Community Pages

**Community Landing Page:**

1. Go to `Pages > Add New`
2. Title: "Community"
3. Content: Add community overview content
4. Set page template: (default)
5. Publish

**Template:** `page-community.php`

**Events Page:**

1. Go to `Pages > Add New`
2. Title: "Events & Workshops"
3. Content: Events are hardcoded in template
4. Set page template: (default)
5. Publish

**Template:** `page-events.php`

**Vault Page:**

1. Go to `Pages > Add New`
2. Title: "The Vault"
3. Content: Vault items are hardcoded in template
4. Set page template: (default)
5. Publish

**Template:** `page-vault.php`

---

### Creating Custom Post Type Content

#### Creating an Article

**Steps:**

1. Go to `Articles > Add New`
2. Title: Enter article title
3. Content: Write your article content
4. Excerpt: Add a brief excerpt (optional)
5. Featured Image: Upload/set featured image
6. Categories: Select or create categories
7. Custom Fields: Add any custom fields (if needed)
8. Publish

**Best Practices:**

- Use proper heading hierarchy (H2, H3, H4)
- Add featured image (recommended size: 1200x630px)
- Write compelling excerpt for archive pages
- Use categories for organization

---

#### Creating a Blog Post

**Steps:**

1. Go to `Blog Posts > Add New`
2. Title: Enter blog post title
3. Content: Write your blog post content
4. Excerpt: Add a brief excerpt (optional)
5. Featured Image: Upload/set featured image
6. Categories: Select or create categories
7. Custom Fields: Add any custom fields (if needed)
8. Publish

**Note:** Reading time is automatically calculated based on word count (200 words per minute).

---

#### Creating a Media Item

**Steps:**

1. Go to `Media Items > Add New`
2. Title: Enter media item title
3. Content: Write your media item content
4. Excerpt: Add a brief excerpt (optional)
5. Featured Image: Upload/set featured image or video thumbnail
6. Categories: Select or create categories
7. Custom Fields: Add any custom fields (if needed)
8. Publish

**Media Types:**

- Interviews
- Podcasts
- Videos
- Articles
- Press Features

---

#### Creating a Tip

**Steps:**

1. Go to `Tips > Add New`
2. Title: Enter tip title
3. Content: Write your tip content
4. Excerpt: Add a brief excerpt (optional)
5. Featured Image: Upload/set featured image
6. Categories: Select or create categories
7. Custom Fields: Add any custom fields (if needed)
8. Publish

**Note:** Reading time is automatically calculated based on word count (200 words per minute).

---

## Page Creation & Routing Fix

### ⚠️ IMPORTANT: Routing Issue Explained

**The Problem:**
All page templates have been created (page-about.php, page-programs.php, page-community.php, etc.), but when clicking navigation links, only the URL changes and the page doesn't load. This is because WordPress pages haven't been created in the database yet.

**Why This Happens:**
WordPress needs actual pages with the correct slugs to know which template to use. The page template system works like this:

1. WordPress looks for a page in the database matching the URL slug
2. If found, it loads the corresponding template file based on the slug
3. If no page exists, WordPress returns a 404 error

**The Solution:**
Create all necessary WordPress pages with the correct slugs. Each page must be created with a specific slug that matches the URL structure and triggers the appropriate template.

---

### Creating All Required Pages

Follow these steps to create all pages manually in WordPress Admin:

#### Method 1: Manual Page Creation (Recommended)

**Step-by-Step Instructions:**

1. Go to `Pages > Add New` in WordPress Admin
2. Enter the page title
3. Set the page slug (click "Edit" next to the permalink and enter the slug)
4. Add placeholder content (optional - can be edited later)
5. Click "Publish"
6. Repeat for each page

**Important Notes:**

- The slug MUST match exactly as specified below
- Slugs are case-insensitive but should use lowercase with hyphens
- For nested pages (like `/programs/private-training`), create the parent page first

---

### Page Creation Checklist

Create each page with the exact slug specified below:

#### Main Pages

| Page Title      | Slug              | Template File            | URL                |
| --------------- | ----------------- | ------------------------ | ------------------ |
| About Joanna    | `about`           | page-about.php           | `/about`           |
| Apply           | `apply`           | page-apply.php           | `/apply`           |
| FAQ             | `faq`             | page-faq.php             | `/faq`             |
| The Journey     | `journey`         | page-journey.php         | `/journey`         |
| Success Stories | `success-stories` | page-success-stories.php | `/success-stories` |

**Steps for Main Pages:**

1. **About Page**
    - Go to `Pages > Add New`
    - Title: "About Joanna"
    - Slug: `about`
    - Content: Add placeholder content or leave blank
    - Publish

2. **Apply Page**
    - Go to `Pages > Add New`
    - Title: "Apply"
    - Slug: `apply`
    - Content: Add placeholder content or leave blank
    - Publish

3. **FAQ Page**
    - Go to `Pages > Add New`
    - Title: "FAQ"
    - Slug: `faq`
    - Content: FAQ items are hardcoded in template
    - Publish

4. **Journey Page**
    - Go to `Pages > Add New`
    - Title: "The Journey"
    - Slug: `journey`
    - Content: Journey phases are hardcoded in template
    - Publish

5. **Success Stories Page**
    - Go to `Pages > Add New`
    - Title: "Success Stories"
    - Slug: `success-stories`
    - Content: Testimonials are hardcoded in template
    - Publish

---

#### Community Pages

| Page Title         | Slug        | Template File      | URL                 |
| ------------------ | ----------- | ------------------ | ------------------- |
| Community          | `community` | page-community.php | `/community`        |
| Events & Workshops | `events`    | page-events.php    | `/community/events` |
| The Vault          | `vault`     | page-vault.php     | `/community/vault`  |

**Steps for Community Pages:**

1. **Community Landing Page**
    - Go to `Pages > Add New`
    - Title: "Community"
    - Slug: `community`
    - Content: Add placeholder content or leave blank
    - Publish

2. **Events Page (Child Page)**
    - Go to `Pages > Add New`
    - Title: "Events & Workshops"
    - Slug: `events`
    - **Parent Page:** Select "Community"
    - Content: Events are hardcoded in template
    - Publish

3. **Vault Page (Child Page)**
    - Go to `Pages > Add New`
    - Title: "The Vault"
    - Slug: `vault`
    - **Parent Page:** Select "Community"
    - Content: Vault items are hardcoded in template
    - Publish

---

#### Programs Pages

| Page Title             | Slug               | Template File     | URL                          |
| ---------------------- | ------------------ | ----------------- | ---------------------------- |
| Programs               | `programs`         | page-programs.php | `/programs`                  |
| Private Training       | `private-training` | page-programs.php | `/programs/private-training` |
| Speak & Rise           | `speak-rise`       | page-programs.php | `/programs/speak-rise`       |
| Corporate Programs     | `corporate`        | page-programs.php | `/programs/corporate`        |
| True Influence License | `license`          | page-programs.php | `/programs/license`          |

**Steps for Programs Pages:**

1. **Programs Landing Page**
    - Go to `Pages > Add New`
    - Title: "Programs"
    - Slug: `programs`
    - Content: Programs are hardcoded in template
    - Publish

2. **Private Training Page (Child Page)**
    - Go to `Pages > Add New`
    - Title: "Private Training"
    - Slug: `private-training`
    - **Parent Page:** Select "Programs"
    - Content: Program details are hardcoded in template
    - Publish

3. **Speak & Rise Page (Child Page)**
    - Go to `Pages > Add New`
    - Title: "Speak & Rise"
    - Slug: `speak-rise`
    - **Parent Page:** Select "Programs"
    - Content: Program details are hardcoded in template
    - Publish

4. **Corporate Programs Page (Child Page)**
    - Go to `Pages > Add New`
    - Title: "Corporate Programs"
    - Slug: `corporate`
    - **Parent Page:** Select "Programs"
    - Content: Program details are hardcoded in template
    - Publish

5. **True Influence License Page (Child Page)**
    - Go to `Pages > Add New`
    - Title: "True Influence License"
    - Slug: `license`
    - **Parent Page:** Select "Programs"
    - Content: Program details are hardcoded in template
    - Publish

---

#### Resource Pages (Custom Post Type Archives)

**Important:** These pages are automatically created by WordPress when you register custom post types. You don't need to create them manually.

| Archive Page     | Slug       | Template File        | URL                   |
| ---------------- | ---------- | -------------------- | --------------------- |
| Articles Archive | `articles` | archive-articles.php | `/resources/articles` |
| Blog Archive     | `blog`     | archive-blog.php     | `/resources/blog`     |
| Media Archive    | `media`    | archive-media.php    | `/resources/media`    |
| Tips Archive     | `tips`     | archive-tips.php     | `/resources/tips`     |

**How These Work:**

- Custom post types are registered in `functions.php`
- WordPress automatically creates archive URLs at `/resources/{post_type}/`
- The archive templates (archive-articles.php, etc.) are automatically used
- No manual page creation needed

**To Verify Archive Pages Work:**

1. Create at least one post in each custom post type
2. Visit the archive URL (e.g., `/resources/articles`)
3. You should see the archive page with your post

---

### Method 2: Automatic Page Creation Script (Optional)

If you prefer to create all pages automatically, use the provided PHP script:

**⚠️ Security Warning:** Delete this script after use to prevent unauthorized access.

#### Using the Setup Script

1. **Locate the script:**
    - File: `setup-pages.php` in theme root directory

2. **Run the script:**
    - Method 1: Visit `https://yoursite.com/wp-content/themes/tim-wordpress/setup-pages.php`
    - Method 2: Run via WP-CLI: `php setup-pages.php`

3. **Delete the script:**
    - After successful page creation, delete `setup-pages.php`
    - This prevents security vulnerabilities

**What the Script Does:**

- Creates all main pages with correct slugs
- Creates all community pages with parent/child relationships
- Creates all programs pages with parent/child relationships
- Sets page templates automatically
- Displays success/error messages

**Script Requirements:**

- WordPress must be installed and configured
- Theme must be activated
- User must have appropriate permissions

---

### Verifying Page Creation

After creating all pages, verify they work correctly:

1. **Check Pages List:**
    - Go to `Pages > All Pages`
    - Verify all pages are listed
    - Check slugs are correct (hover over page title to see slug)

2. **Test Navigation Links:**
    - Visit your homepage
    - Click each navigation link
    - Verify each page loads correctly
    - Check URL matches expected structure

3. **Test Child Pages:**
    - Visit `/community/events`
    - Visit `/community/vault`
    - Visit `/programs/private-training`
    - Visit `/programs/speak-rise`
    - Visit `/programs/corporate`
    - Visit `/programs/license`

4. **Test Archive Pages:**
    - Create a test post in each custom post type
    - Visit `/resources/articles`
    - Visit `/resources/blog`
    - Visit `/resources/media`
    - Visit `/resources/tips`

---

### Troubleshooting Page Creation Issues

**Problem: Page shows 404 error**

**Solutions:**

1. Verify the page slug matches exactly
2. Flush rewrite rules: Go to `Settings > Permalinks` and click "Save Changes"
3. Check that the page is published (not draft)
4. Clear browser cache
5. Check for plugin conflicts

**Problem: Child pages not working**

**Solutions:**

1. Verify parent page exists and is published
2. Check that parent page is selected in page attributes
3. Verify child page slug is correct
4. Flush rewrite rules

**Problem: Archive pages not working**

**Solutions:**

1. Verify custom post types are registered in `functions.php`
2. Create at least one post in the custom post type
3. Flush rewrite rules
4. Check rewrite slug in custom post type registration

**Problem: Navigation menu links don't work**

**Solutions:**

1. Verify pages exist in WordPress
2. Re-create navigation menu with correct page links
3. Clear browser cache
4. Check for JavaScript errors

---

### Quick Reference: All Pages to Create

**Main Pages (5):**

- [ ] About (`/about`)
- [ ] Apply (`/apply`)
- [ ] FAQ (`/faq`)
- [ ] Journey (`/journey`)
- [ ] Success Stories (`/success-stories`)

**Community Pages (3):**

- [ ] Community (`/community`)
- [ ] Events (`/community/events`)
- [ ] Vault (`/community/vault`)

**Programs Pages (5):**

- [ ] Programs (`/programs`)
- [ ] Private Training (`/programs/private-training`)
- [ ] Speak & Rise (`/programs/speak-rise`)
- [ ] Corporate (`/programs/corporate`)
- [ ] License (`/programs/license`)

**Archive Pages (Automatic - No Manual Creation Needed):**

- [ ] Articles (`/resources/articles`) - Auto-created
- [ ] Blog (`/resources/blog`) - Auto-created
- [ ] Media (`/resources/media`) - Auto-created
- [ ] Tips (`/resources/tips`) - Auto-created

**Total Pages to Create Manually: 13**

---

## Required Plugins

### Essential Plugins

#### 1. Contact Form 7

**Purpose:** Form management for application and contact forms

**Installation:**

1. Go to `Plugins > Add New`
2. Search for "Contact Form 7"
3. Click `Install Now`
4. Click `Activate`

**Configuration:**

1. Go to `Contact > Add New`
2. Create your application form
3. Add form fields as needed
4. Configure email notifications
5. Copy the form shortcode
6. Paste shortcode into Apply page

**Recommended Form Fields:**

- Name (text)
- Email (email)
- Phone (tel)
- Program Interest (select)
- Message (textarea)

---

#### 2. Mailchimp for WordPress (Optional)

**Purpose:** Newsletter subscription management

**Installation:**

1. Go to `Plugins > Add New`
2. Search for "Mailchimp for WordPress"
3. Click `Install Now`
4. Click `Activate`

**Configuration:**

1. Go to `MC4WP > Mailchimp`
2. Connect your Mailchimp account
3. Create a new form
4. Customize form fields
5. Copy the form shortcode
6. Paste shortcode into footer newsletter section

---

### Recommended Plugins

#### 3. Yoast SEO or Rank Math

**Purpose:** SEO optimization

**Installation:**

1. Go to `Plugins > Add New`
2. Search for "Yoast SEO" or "Rank Math"
3. Click `Install Now`
4. Click `Activate`

**Configuration:**

- Configure SEO settings
- Add meta titles and descriptions
- Generate XML sitemap
- Configure social media settings

---

#### 4. WP Rocket or W3 Total Cache

**Purpose:** Performance optimization and caching

**Installation:**

1. Go to `Plugins > Add New`
2. Search for "WP Rocket" or "W3 Total Cache"
3. Click `Install Now`
4. Click `Activate`

**Configuration:**

- Enable page caching
- Enable minification
- Enable lazy loading
- Configure CDN (if applicable)

---

#### 5. Smush or EWWW Image Optimizer

**Purpose:** Image optimization

**Installation:**

1. Go to `Plugins > Add New`
2. Search for "Smush" or "EWWW Image Optimizer"
3. Click `Install Now`
4. Click `Activate`

**Configuration:**

- Enable automatic optimization
- Configure compression settings
- Enable lazy loading

---

#### 6. Wordfence Security

**Purpose:** Security protection

**Installation:**

1. Go to `Plugins > Add New`
2. Search for "Wordfence Security"
3. Click `Install Now`
4. Click `Activate`

**Configuration:**

- Run security scan
- Configure firewall
- Set up 2FA for admin accounts

---

## Flushing Rewrite Rules

Rewrite rules need to be flushed after:

- Theme activation
- Custom post type registration changes
- Permalink structure changes
- Plugin activation/deactivation

### Method 1: Via WordPress Admin (Recommended)

1. Go to `Settings > Permalinks`
2. Click `Save Changes` (no need to change anything)
3. This automatically flushes rewrite rules

### Method 2: Via Code

Add this to `functions.php`:

```php
function flush_rewrite_rules_manually() {
    flush_rewrite_rules();
}
add_action('init', 'flush_rewrite_rules_manually');
```

**Important:** Remove this code after flushing to avoid performance issues.

### Method 3: Via WP-CLI

If you have WP-CLI access:

```bash
wp rewrite flush
```

---

## Asset Management

### Development Setup

If you want to customize the theme's CSS and JavaScript:

#### 1. Install Dependencies

```bash
cd wp-content/themes/tim-wordpress
npm install
```

#### 2. Start Development Server

```bash
npm run dev
```

This starts Vite's development server with hot module replacement.

#### 3. Build for Production

```bash
npm run build
```

This compiles and minifies assets for production.

---

### Asset Structure

```
tim-wordpress/
├── assets/
│   ├── fonts/           # Custom fonts (if any)
│   ├── images/          # Theme images
│   │   ├── carousel/    # Carousel images
│   │   ├── fulllogo_*.png
│   │   ├── icononly_*.png
│   │   ├── joanna-*.webp
│   │   └── videos/     # Video files
│   └── videos/         # Video files
├── resources/
│   ├── css/
│   │   ├── app.css      # Main CSS entry point
│   │   ├── theme.css    # Theme configuration
│   │   ├── fonts.css    # Font imports
│   │   ├── utilities.css # Custom utilities
│   │   ├── custom.css   # Content styling
│   │   └── editor-style.css # Editor styles
│   └── js/
│       ├── app.js       # Main JavaScript entry point
│       └── theme.js     # Theme JavaScript
```

---

### Adding New Images

1. **Via WordPress Admin:**
    - Go to `Media > Add New`
    - Upload your images
    - Use the image URL in templates

2. **Via FTP:**
    - Upload images to `assets/images/`
    - Reference using `get_template_directory_uri() . '/assets/images/filename.jpg'`

---

### Adding New Fonts

1. **Via Google Fonts:**
    - Add to `functions.php`:

    ```php
    wp_enqueue_style('tim-wordpress-google-fonts', 'https://fonts.googleapis.com/css2?family=Your+Font:wght@400;700&display=swap', array(), null);
    ```

2. **Via Local Files:**
    - Upload font files to `assets/fonts/`
    - Add to `resources/css/fonts.css`:
    ```css
    @font-face {
        font-family: "Your Font";
        src: url("../../assets/fonts/your-font.woff2") format("woff2");
        font-weight: 400;
        font-style: normal;
    }
    ```

---

## Troubleshooting

### Theme Not Activating

**Problem:** Theme doesn't appear in theme list or won't activate

**Solutions:**

1. Check PHP version (requires 8.0+)
2. Check WordPress version (requires 6.0+)
3. Verify all files are uploaded correctly
4. Check file permissions (should be 644 for files, 755 for directories)
5. Enable WP_DEBUG in `wp-config.php` to see errors
6. Check for missing required files (style.css, index.php, functions.php)

---

### Styles Not Loading

**Problem:** CSS not loading or styles not applying

**Solutions:**

1. Check that Vite is running (if in development)
2. Run `npm run build` to compile assets
3. Clear browser cache
4. Check browser console for CSS errors
5. Verify `app.css` is properly enqueued in `functions.php`
6. Check file paths in CSS imports

---

### JavaScript Not Working

**Problem:** JavaScript functionality not working

**Solutions:**

1. Check browser console for errors
2. Verify `theme.js` is properly enqueued
3. Check for syntax errors in JavaScript
4. Verify jQuery is loaded (if needed)
5. Test in different browsers
6. Clear browser cache

---

### Custom Post Types 404 Error

**Problem:** Custom post type pages return 404 error

**Solutions:**

1. Flush rewrite rules: Go to Settings > Permalinks and click Save
2. Verify custom post type is registered in `functions.php`
3. Check rewrite slug matches URL structure
4. Clear browser cache
5. Check for plugin conflicts

---

### Navigation Menu Not Displaying

**Problem:** Navigation menu doesn't show

**Solutions:**

1. Go to Appearance > Menus
2. Verify menu is created
3. Check that menu is assigned to correct location
4. Verify menu items are added
5. Clear browser cache
6. Check for JavaScript errors

---

### Images Not Loading

**Problem:** Images not displaying

**Solutions:**

1. Check image file paths
2. Verify images are uploaded to Media Library
3. Check file permissions
4. Verify image URLs in template files
5. Check for broken links
6. Test with different image formats

---

### Video Background Not Playing

**Problem:** Hero video background not playing

**Solutions:**

1. Verify video file exists in `assets/videos/`
2. Check video file format (MP4 recommended)
3. Verify video is muted (required for autoplay)
4. Check browser autoplay settings
5. Test in different browsers
6. Check video file size (may be too large)

---

### Form Not Submitting

**Problem:** Contact form not submitting

**Solutions:**

1. Verify Contact Form 7 plugin is installed and activated
2. Check form configuration in WordPress Admin > Contact
3. Verify email settings are correct
4. Check for JavaScript errors
5. Test form submission with browser DevTools Network tab
6. Check spam folder for test emails

---

### Slow Page Load Times

**Problem:** Pages loading slowly

**Solutions:**

1. Optimize images (use WebP format)
2. Enable caching plugin (WP Rocket, W3 Total Cache)
3. Minify CSS and JavaScript
4. Use CDN for static assets
5. Check for large video files
6. Run Lighthouse audit for specific recommendations
7. Optimize database

---

### White Screen of Death

**Problem:** Blank white screen on frontend or admin

**Solutions:**

1. Enable WP_DEBUG in `wp-config.php`
2. Check error logs
3. Deactivate plugins one by one
4. Switch to default theme to isolate issue
5. Check PHP error log
6. Increase PHP memory limit in `wp-config.php`:
    ```php
    define('WP_MEMORY_LIMIT', '256M');
    ```

---

### Permalinks Not Working

**Problem:** Pretty permalinks not working

**Solutions:**

1. Go to Settings > Permalinks
2. Select "Post name" structure
3. Click Save Changes
4. Flush rewrite rules
5. Check `.htaccess` file permissions
6. Verify mod_rewrite is enabled on server

---

## Maintenance

### Regular Tasks

**Weekly:**

- Check for theme and plugin updates
- Monitor site performance
- Check for broken links
- Review error logs

**Monthly:**

- Backup database and files
- Optimize database
- Review and update content
- Check security scans

**Quarterly:**

- Review and update SEO
- Audit content for accuracy
- Review analytics
- Test all functionality

---

## Support Resources

- [WordPress Codex](https://codex.wordpress.org/)
- [TailPress Documentation](https://tailpress.io/)
- [Tailwind CSS Documentation](https://tailwindcss.com/docs)
- [WordPress Theme Handbook](https://developer.wordpress.org/themes/)
- [WordPress Support Forums](https://wordpress.org/support/forums/)

---

**Last Updated:** 2026-04-06  
**Theme Version:** 1.0.0  
**Migration Phase:** 5 - Testing and Final Review
