# Testing Guide for TIM WordPress Theme

## Overview

This guide provides comprehensive testing instructions for the TIM WordPress theme, migrated from Nuxt.js. It covers all pages, functionality, responsive design, and browser compatibility.

## Table of Contents

1. [Main Pages](#main-pages)
2. [Community Pages](#community-pages)
3. [Archive Pages](#archive-pages)
4. [Single Pages](#single-pages)
5. [Responsive Breakpoints](#responsive-breakpoints)
6. [Browser Compatibility](#browser-compatibility)
7. [Known Issues & Limitations](#known-issues--limitations)
8. [Troubleshooting Guide](#troubleshooting-guide)

---

## Main Pages

### 1. Homepage (front-page.php)

**URL:** `/`

**Expected Functionality:**

- Hero section with video background loads and plays
- Intro section displays correctly
- Paths section shows all 3 path cards with proper styling
- Social proof section displays testimonials
- CTA section is visible and functional
- Navigation menu is accessible
- Footer displays all links and newsletter form
- Smooth scroll behavior works
- Floating particles animation (if implemented)

**Test Checklist:**

- [ ] Hero video loads and plays automatically
- [ ] Hero text is readable over video
- [ ] All navigation links work
- [ ] Path cards display correctly on all breakpoints
- [ ] Testimonial cards display correctly
- [ ] CTA button links to correct page
- [ ] Newsletter form is visible
- [ ] Footer links work correctly
- [ ] Mobile menu toggles properly

---

### 2. About Page (page-about.php)

**URL:** `/about`

**Expected Functionality:**

- Hero section displays Joanna's image
- About content sections display in correct order
- Images load and display properly
- All text is readable with proper typography
- Navigation maintains active state

**Test Checklist:**

- [ ] Hero image loads correctly
- [ ] All content sections display
- [ ] Images are properly sized and positioned
- [ ] Typography matches design
- [ ] Responsive layout works on all devices
- [ ] Navigation shows correct active state

---

### 3. Apply Page (page-apply.php)

**URL:** `/apply`

**Expected Functionality:**

- Application form displays correctly
- Form fields are properly labeled
- Form validation works
- Form submits successfully
- Success/error messages display
- All required fields are marked

**Test Checklist:**

- [ ] Form displays all required fields
- [ ] Form validation triggers for empty fields
- [ ] Form submits without errors
- [ ] Success message displays after submission
- [ ] Email notifications are sent (if configured)
- [ ] Form is responsive on mobile

---

### 4. FAQ Page (page-faq.php)

**URL:** `/faq`

**Expected Functionality:**

- FAQ accordion functionality works
- Questions expand/collapse smoothly
- All FAQ items are accessible
- Icons animate correctly
- Multiple items can be open (if designed that way)

**Test Checklist:**

- [ ] All FAQ items display
- [ ] Clicking a question expands the answer
- [ ] Clicking again collapses the answer
- [ ] Animation is smooth
- [ ] Icons rotate/transform correctly
- [ ] Works on mobile touch devices

---

### 5. Journey Page (page-journey.php)

**URL:** `/journey`

**Expected Functionality:**

- All 5 phase cards display
- Phase cards are properly styled
- Content is readable
- Responsive layout works
- Visual hierarchy is maintained

**Test Checklist:**

- [ ] All 5 phases display
- [ ] Phase cards have correct styling
- [ ] Content is readable
- [ ] Layout is responsive
- [ ] Visual hierarchy is clear
- [ ] Images (if any) load correctly

---

### 6. Programs Page (page-programs.php)

**URL:** `/programs`

**Expected Functionality:**

- All 3 program tiers display
- Program cards show correct information
- Pricing is displayed correctly
- CTA buttons link to correct pages
- Responsive layout works

**Test Checklist:**

- [ ] All 3 programs display
- [ ] Program cards show correct details
- [ ] Pricing is accurate
- [ ] CTA buttons work
- [ ] Layout is responsive
- [ ] Visual hierarchy is maintained

---

### 7. Success Stories Page (page-success-stories.php)

**URL:** `/success-stories`

**Expected Functionality:**

- All testimonials display
- Testimonial cards are properly styled
- Client images load correctly
- Quotes display properly
- Responsive layout works

**Test Checklist:**

- [ ] All testimonials display
- [ ] Testimonial cards are styled correctly
- [ ] Client images load
- [ ] Quotes are readable
- [ ] Layout is responsive
- [ ] No console errors

---

## Community Pages

### 8. Community Landing Page (page-community.php)

**URL:** `/community`

**Expected Functionality:**

- Community overview displays
- Links to Vault and Events pages work
- Content is organized properly
- Visual design matches other pages

**Test Checklist:**

- [ ] Community overview displays
- [ ] Links to subpages work
- [ ] Content is organized
- [ ] Visual design is consistent
- [ ] Responsive layout works

---

### 9. Events Page (page-events.php)

**URL:** `/community/events`

**Expected Functionality:**

- Event cards display correctly
- Event details are accurate
- Dates and times are formatted properly
- Registration links work (if applicable)
- Responsive layout works

**Test Checklist:**

- [ ] All events display
- [ ] Event cards are styled correctly
- [ ] Dates/times are accurate
- [ ] Registration links work
- [ ] Layout is responsive
- [ ] Images load correctly

---

### 10. Vault Page (page-vault.php)

**URL:** `/community/vault`

**Expected Functionality:**

- Vault items display correctly
- Access restrictions work (if implemented)
- Download links work (if applicable)
- Responsive layout works
- Content is organized properly

**Test Checklist:**

- [ ] All vault items display
- [ ] Access restrictions work
- [ ] Download links work
- [ ] Layout is responsive
- [ ] Content is organized
- [ ] No console errors

---

## Archive Pages

### 11. Articles Archive (archive-articles.php)

**URL:** `/resources/articles`

**Expected Functionality:**

- All articles display in grid/list
- Pagination works correctly
- Featured images load
- Excerpts display properly
- Links to single pages work
- Filter/sort options work (if implemented)

**Test Checklist:**

- [ ] All articles display
- [ ] Pagination works
- [ ] Featured images load
- [ ] Excerpts display
- [ ] Links to single pages work
- [ ] Layout is responsive
- [ ] Filters/sort work (if implemented)

---

### 12. Blog Archive (archive-blog.php)

**URL:** `/resources/blog`

**Expected Functionality:**

- All blog posts display
- Pagination works correctly
- Featured images load
- Excerpts display properly
- Links to single pages work
- Reading time displays

**Test Checklist:**

- [ ] All blog posts display
- [ ] Pagination works
- [ ] Featured images load
- [ ] Excerpts display
- [ ] Links to single pages work
- [ ] Reading time displays
- [ ] Layout is responsive

---

### 13. Media Archive (archive-media.php)

**URL:** `/resources/media`

**Expected Functionality:**

- All media items display
- Pagination works correctly
- Featured images/thumbnails load
- Excerpts display properly
- Links to single pages work
- Media type indicators display

**Test Checklist:**

- [ ] All media items display
- [ ] Pagination works
- [ ] Thumbnails load
- [ ] Excerpts display
- [ ] Links to single pages work
- [ ] Media type indicators work
- [ ] Layout is responsive

---

### 14. Tips Archive (archive-tips.php)

**URL:** `/resources/tips`

**Expected Functionality:**

- All tips display
- Pagination works correctly
- Featured images load
- Excerpts display properly
- Links to single pages work
- Category tags display (if implemented)

**Test Checklist:**

- [ ] All tips display
- [ ] Pagination works
- [ ] Featured images load
- [ ] Excerpts display
- [ ] Links to single pages work
- [ ] Category tags display
- [ ] Layout is responsive

---

## Single Pages

### 15. Single Article (single-articles.php)

**URL:** `/resources/articles/[slug]`

**Expected Functionality:**

- Article content displays correctly
- Featured image displays
- Author info shows (if implemented)
- Date displays
- Reading time displays
- Related posts section works
- Social sharing (if implemented)
- Comments section (if enabled)

**Test Checklist:**

- [ ] Content displays correctly
- [ ] Featured image loads
- [ ] Author info shows
- [ ] Date displays
- [ ] Reading time displays
- [ ] Related posts work
- [ ] Social sharing works (if implemented)
- [ ] Comments work (if enabled)
- [ ] Layout is responsive

---

### 16. Single Blog Post (single-blog.php)

**URL:** `/resources/blog/[slug]`

**Expected Functionality:**

- Blog post content displays correctly
- Featured image displays
- Author info shows
- Date displays
- Reading time displays
- Related posts section works
- Social sharing (if implemented)
- Comments section (if enabled)

**Test Checklist:**

- [ ] Content displays correctly
- [ ] Featured image loads
- [ ] Author info shows
- [ ] Date displays
- [ ] Reading time displays
- [ ] Related posts work
- [ ] Social sharing works (if implemented)
- [ ] Comments work (if enabled)
- [ ] Layout is responsive

---

### 17. Single Media Item (single-media.php)

**URL:** `/resources/media/[slug]`

**Expected Functionality:**

- Media content displays correctly
- Featured image/video displays
- Media type indicator shows
- Date displays
- Related media section works
- Social sharing (if implemented)

**Test Checklist:**

- [ ] Content displays correctly
- [ ] Featured media loads
- [ ] Media type indicator shows
- [ ] Date displays
- [ ] Related media work
- [ ] Social sharing works (if implemented)
- [ ] Layout is responsive

---

### 18. Single Tip (single-tips.php)

**URL:** `/resources/tips/[slug]`

**Expected Functionality:**

- Tip content displays correctly
- Featured image displays
- Date displays
- Reading time displays
- Related tips section works
- Social sharing (if implemented)

**Test Checklist:**

- [ ] Content displays correctly
- [ ] Featured image loads
- [ ] Date displays
- [ ] Reading time displays
- [ ] Related tips work
- [ ] Social sharing works (if implemented)
- [ ] Layout is responsive

---

## Responsive Breakpoints

### Mobile (≤ 600px)

**Test Devices:**

- iPhone SE (375px)
- iPhone 12/13/14 (390px)
- iPhone 14 Pro Max (430px)
- Samsung Galaxy S21 (360px)

**Test Checklist:**

- [ ] Navigation collapses to hamburger menu
- [ ] Mobile menu toggles smoothly
- [ ] All content is readable without horizontal scroll
- [ ] Touch targets are at least 44x44px
- [ ] Images scale properly
- [ ] Font sizes are readable
- [ ] Forms are easy to use
- [ ] No horizontal overflow
- [ ] Footer stacks vertically

---

### Tablet (601px - 960px)

**Test Devices:**

- iPad Mini (768px)
- iPad (810px)
- iPad Pro (1024px - test in landscape)

**Test Checklist:**

- [ ] Navigation adapts to tablet layout
- [ ] Content displays in 2-column grid where appropriate
- [ ] Images scale properly
- [ ] Font sizes are appropriate
- [ ] Forms are easy to use
- [ ] No horizontal overflow
- [ ] Footer adapts to tablet layout

---

### Desktop (≥ 961px)

**Test Devices:**

- Laptop (1366px)
- Desktop (1920px)
- Large Desktop (2560px)

**Test Checklist:**

- [ ] Full navigation displays
- [ ] Content displays in optimal layout
- [ ] Images display at full size
- [ ] Hover effects work
- [ ] Animations play smoothly
- [ ] No horizontal overflow
- [ ] Footer displays in full layout

---

## Browser Compatibility

### Desktop Browsers

**Chrome (Latest)**

- [ ] All pages load correctly
- [ ] CSS displays properly
- [ ] JavaScript works
- [ ] No console errors

**Firefox (Latest)**

- [ ] All pages load correctly
- [ ] CSS displays properly
- [ ] JavaScript works
- [ ] No console errors

**Safari (Latest)**

- [ ] All pages load correctly
- [ ] CSS displays properly
- [ ] JavaScript works
- [ ] No console errors
- [ ] Video background plays

**Edge (Latest)**

- [ ] All pages load correctly
- [ ] CSS displays properly
- [ ] JavaScript works
- [ ] No console errors

---

### Mobile Browsers

**Chrome Mobile (iOS/Android)**

- [ ] All pages load correctly
- [ ] CSS displays properly
- [ ] JavaScript works
- [ ] Touch interactions work
- [ ] No console errors

**Safari Mobile (iOS)**

- [ ] All pages load correctly
- [ ] CSS displays properly
- [ ] JavaScript works
- [ ] Touch interactions work
- [ ] Video background plays
- [ ] No console errors

**Samsung Internet (Android)**

- [ ] All pages load correctly
- [ ] CSS displays properly
- [ ] JavaScript works
- [ ] Touch interactions work
- [ ] No console errors

---

## Known Issues & Limitations

### Current Known Issues

1. **Video Background Autoplay**
    - **Issue:** Some browsers block autoplay videos with sound
    - **Workaround:** Video should be muted for autoplay
    - **Status:** Implemented with muted attribute

2. **Mobile Menu Animation**
    - **Issue:** May have slight delay on older devices
    - **Workaround:** CSS transitions optimized
    - **Status:** Optimized

3. **Image Loading**
    - **Issue:** Large images may load slowly on slow connections
    - **Workaround:** Implement lazy loading
    - **Status:** Can be added in future optimization

4. **Form Submission**
    - **Issue:** Contact Form 7 requires configuration
    - **Workaround:** Configure email settings in WordPress admin
    - **Status:** Requires manual configuration

### Limitations

1. **Dynamic Content**
    - Currently uses hardcoded data in templates
    - Future: Use WordPress Custom Fields or ACF for dynamic content

2. **Search Functionality**
    - Uses default WordPress search
    - Future: Implement advanced search with filtering

3. **Comments**
    - Uses default WordPress comments
    - Future: Consider Disqus or other comment systems

4. **Social Sharing**
    - Not implemented in current version
    - Future: Add social sharing buttons

---

## Troubleshooting Guide

### Navigation Issues

**Problem:** Navigation menu doesn't display

- **Solution:**
    1. Check that menus are created in WordPress Admin > Appearance > Menus
    2. Verify menu is assigned to "Primary Menu" location
    3. Clear browser cache
    4. Check for JavaScript errors in browser console

**Problem:** Mobile menu doesn't toggle

- **Solution:**
    1. Check that `theme.js` is properly enqueued
    2. Verify JavaScript has no errors
    3. Check mobile menu button has correct classes
    4. Test on different mobile devices

---

### Styling Issues

**Problem:** CSS not loading

- **Solution:**
    1. Check that Vite is running (if in development)
    2. Run `npm run build` to compile assets
    3. Clear browser cache
    4. Check browser console for CSS errors
    5. Verify `app.css` is properly enqueued in `functions.php`

**Problem:** Colors don't match design

- **Solution:**
    1. Check `theme.css` for color definitions
    2. Verify `theme.json` color palette
    3. Clear browser cache
    4. Check for CSS overrides

**Problem:** Fonts not loading

- **Solution:**
    1. Check Google Fonts URL in `functions.php`
    2. Verify internet connection
    3. Check browser console for font loading errors
    4. Clear browser cache

---

### Template Issues

**Problem:** Page template not loading

- **Solution:**
    1. Verify template file exists in theme directory
    2. Check template file name matches page slug
    3. Verify file has correct PHP opening tag
    4. Check for PHP syntax errors
    5. Enable WP_DEBUG in `wp-config.php` to see errors

**Problem:** Custom post type 404 error

- **Solution:**
    1. Flush rewrite rules: Go to Settings > Permalinks and click Save
    2. Verify custom post type is registered in `functions.php`
    3. Check rewrite slug matches URL structure
    4. Clear browser cache

---

### Form Issues

**Problem:** Contact form not submitting

- **Solution:**
    1. Verify Contact Form 7 plugin is installed and activated
    2. Check form configuration in WordPress Admin > Contact
    3. Verify email settings are correct
    4. Check for JavaScript errors
    5. Test form submission with browser DevTools Network tab

**Problem:** Newsletter form not working

- **Solution:**
    1. Verify newsletter plugin is installed and activated
    2. Check plugin configuration
    3. Verify API keys are set
    4. Test form submission

---

### Performance Issues

**Problem:** Page loads slowly

- **Solution:**
    1. Optimize images (use WebP format)
    2. Enable caching plugin (WP Rocket, W3 Total Cache)
    3. Minify CSS and JavaScript
    4. Use CDN for static assets
    5. Check for large video files
    6. Run Lighthouse audit for specific recommendations

**Problem:** Images not loading

- **Solution:**
    1. Check image file paths
    2. Verify images are uploaded to Media Library
    3. Check file permissions
    4. Verify image URLs in template files

---

### JavaScript Issues

**Problem:** JavaScript not working

- **Solution:**
    1. Check browser console for errors
    2. Verify `theme.js` is properly enqueued
    3. Check for syntax errors in JavaScript
    4. Verify jQuery is loaded (if needed)
    5. Test in different browsers

**Problem:** Animations not playing

- **Solution:**
    1. Check if animations are disabled in browser settings
    2. Verify CSS animation properties
    3. Check for JavaScript errors
    4. Test in different browsers

---

### WordPress-Specific Issues

**Problem:** White screen of death

- **Solution:**
    1. Enable WP_DEBUG in `wp-config.php`
    2. Check error logs
    3. Deactivate plugins one by one
    4. Switch to default theme to isolate issue
    5. Check PHP error log

**Problem:** Permalinks not working

- **Solution:**
    1. Go to Settings > Permalinks
    2. Select "Post name" structure
    3. Click Save Changes
    4. Flush rewrite rules
    5. Check `.htaccess` file permissions

**Problem:** Custom post types not showing

- **Solution:**
    1. Flush rewrite rules
    2. Verify post type registration in `functions.php`
    3. Check user permissions
    4. Clear browser cache

---

## Testing Checklist Summary

### Before Launch

- [ ] All pages load without errors
- [ ] Navigation works on all pages
- [ ] Mobile menu functions properly
- [ ] All forms submit successfully
- [ ] All links work correctly
- [ ] Images load and display properly
- [ ] Video background plays (if applicable)
- [ ] Responsive design works on all breakpoints
- [ ] Cross-browser compatibility verified
- [ ] No console errors
- [ ] Performance is acceptable (< 3s load time)
- [ ] Accessibility features work
- [ ] SEO meta tags are set
- [ ] Sitemap is generated
- [ ] 404 page displays correctly

### After Launch

- [ ] Monitor for 404 errors
- [ ] Check Google Search Console for issues
- [ ] Monitor page load times
- [ ] Test form submissions
- [ ] Verify analytics tracking
- [ ] Check for broken links
- [ ] Monitor user feedback
- [ ] Perform regular backups

---

## Additional Resources

- [WordPress Codex](https://codex.wordpress.org/)
- [TailPress Documentation](https://tailpress.io/)
- [Tailwind CSS Documentation](https://tailwindcss.com/docs)
- [WordPress Theme Handbook](https://developer.wordpress.org/themes/)
- [Web.dev Testing](https://web.dev/measure/)

---

**Last Updated:** 2026-04-06  
**Theme Version:** 1.0.0  
**Migration Phase:** 5 - Testing and Final Review
