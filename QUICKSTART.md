# 🚀 Quick Start Guide

## Get Your Site Running in 60 Seconds

### Step 1: Start the Server
```bash
cd c:\xampp3\htdocs\africhique
c:\xampp3\php\php.exe -S localhost:8080
```

### Step 2: Open Your Browser
Visit: **http://localhost:8080**

---

## What to Test

### 🏠 Home Page (index.php)
- ✅ Hero section displays with image background
- ✅ Featured products show with placeholder images
- ✅ "Add to Cart" buttons work
- ✅ Navigation menu works on mobile

### 📦 Products Page (products.php)
- ✅ All products display in grid
- ✅ Search bar filters products
- ✅ Category filter works
- ✅ Cards have hover effects (lift + zoom)

### ℹ️ About Page (about.php)
- ✅ Core values cards show with hover effects
- ✅ Styling looks professional

### 📋 Order Page (order.php)
- ✅ Cart items display with images
- ✅ Cart total calculates correctly
- ✅ Forms are styled and functional

### 📞 Contact Page (contact.php)
- ✅ Contact form displays
- ✅ Newsletter form shows

### 📱 Mobile Testing
- ✅ Hamburger menu appears on small screens
- ✅ Menu closes when you click a link
- ✅ Layout adapts to phone size

---

## 🛠️ File Organization

```
africhique/
├── index.php              ← Home page
├── about.php              ← About + values
├── products.php           ← Products catalog
├── order.php              ← Shopping cart
├── contact.php            ← Contact form
├── includes/
│   ├── header.php         ← Top nav + meta tags
│   ├── footer.php         ← Bottom section
│   ├── hero.php           ← Hero banner
│   └── cards.php          ← Product card component
├── assets/
│   ├── Styles/styles.css  ← All styling
│   ├── script/main.js     ← JavaScript
│   └── images/
│       ├── logo2.svg      ← Your logo
│       └── hero-image.jpg ← Placeholder image
└── README files (helpful guides)
```

---

## 🎨 Key Features

### Navigation
- Sticky header that follows you down the page
- Mobile hamburger menu (click to open/close)
- Active page highlighted in nav

### Shopping
- Add items to cart (saves in browser)
- View cart on order page
- Edit quantities
- Remove items
- Total calculates automatically

### Design
- Professional green and gold color scheme
- Smooth animations on buttons and cards
- Better shadows for depth
- Mobile-friendly responsive design

---

## 📸 Next: Add Real Images

To make it look even better, replace the placeholder image:

1. Save your product photos to:
   ```
   assets/images/
   ```

2. Update image paths in the PHP files:
   ```php
   'img'=>'assets/images/dress_ankara.jpg'
   ```

3. Recommended image sizes:
   - Product cards: 800×600px
   - Hero background: 1920×1080px

---

## 🔗 Links to Update

### In `includes/footer.php`:
- Replace WhatsApp number: `263771234567`
- Update address: `12 Heritage Lane, Bulawayo, Zimbabwe`
- Add social media links (Facebook, Instagram, Pinterest)

### In `includes/header.php`:
- Update canonical URL: `https://africhique.co.zw/`
- Change OG image URL to your domain

---

## 🆘 If Something Looks Wrong

### Buttons don't change color on hover?
- Clear browser cache: `Ctrl+Shift+Delete`
- Hard refresh: `Ctrl+Shift+R`

### Images aren't showing?
- Check file paths match exactly (case-sensitive)
- Use forward slashes: `assets/images/` not `Assets\images\`

### Mobile menu doesn't work?
- Open browser console: `F12`
- Check for JavaScript errors in red
- Ensure `main.js` is loading

### Forms don't respond?
- Try different browser
- Check console for errors
- Make sure `main.js` is enabled

---

## 💡 Pro Tips

✅ **Test on Phone**: Use browser dev tools (F12 → toggle device toolbar)
✅ **Check Mobile**: Looks good at 375px, 768px, and 1200px widths
✅ **Try Hover**: Move mouse over cards, buttons, and links
✅ **Test Forms**: Fill out contact/newsletter forms
✅ **Add to Cart**: Add multiple items and check cart page

---

## 🚀 When You're Ready for Production

1. **Buy Domain**: Get `africhique.co.zw` or similar
2. **Get SSL**: Enable HTTPS (free with Let's Encrypt)
3. **Choose Hosting**: Move from local to web server
4. **Set Up Database**: Store products in MySQL
5. **Add Payments**: Integrate Stripe or PayPal
6. **Launch!**: Point domain to hosting

---

## 📞 Support Resources

- **CSS Questions?** Check `IMPROVEMENTS.md` for design system
- **How to Add Images?** See section above
- **What to do next?** Read `CHANGELOG.md`
- **Need more features?** Check the recommendations in `IMPROVEMENTS.md`

---

## ✨ You're All Set!

Your Africhique website is now **professional-grade** and ready to impress customers. The foundation is solid, so you can build from here with:
- Real product images
- Database setup
- Payment integration
- Admin dashboard

**Happy selling! 🎉**

