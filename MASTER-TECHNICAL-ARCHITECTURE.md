# WEBHODA — Master Technical Architecture
## نسخه 1.1 — معماری فنی مصوب

**وضعیت:** Approved — تأییدشده توسط مالک پروژه  
**نوع معماری:** Hybrid Classic WordPress Theme با پشتیبانی کنترل‌شده از Gutenberg  
**نام قالب:** `agency-theme`  
**محیط توسعه:** LocalWP  
**مخزن:** `Parviz-Parastar/webhoda-agency-theme`  
**شاخه مرجع:** `main`

---

## 1. هدف و محدوده معماری

هدف، توسعه یک قالب اختصاصی WordPress برای برند WEBHODA است که ویژگی‌های زیر را داشته باشد:

- ساختار سبک، امن و قابل نگهداری
- توسعه‌پذیری بدون پیچیدگی و وابستگی غیرضروری
- طراحی اختصاصی و هویت بصری منسجم
- پشتیبانی اصولی از زبان فارسی و چیدمان RTL
- آمادگی معماری برای پشتیبانی احتمالی از زبان‌های دیگر
- طراحی واکنش‌گرا (Responsive)
- دسترس‌پذیری و سازگاری با صفحه‌کلید
- هماهنگی کنترل‌شده با Gutenberg
- عملکرد مناسب و رعایت اصول SEO

**محدوده این سند:** معماری قالب، ساختار فایل‌ها، PHP، HTML، CSS، JavaScript، رسانه، Responsive Design، Gutenberg و کنترل کیفیت.

این سند به‌تنهایی مجوز تغییر کد، ایجاد فایل یا افزودن فناوری جدید نیست؛ اجرای هر مرحله تابع محدوده و تأییدهای پروژه است.

## 2. تصمیمات قطعی پروژه

موارد زیر براساس تصمیمات تأییدشده پروژه، مبنای معماری هستند:

| موضوع | تصمیم |
|---|---|
| CMS | WordPress |
| محیط محلی | LocalWP |
| نوع قالب | Classic PHP Theme |
| ویرایشگر | پشتیبانی کنترل‌شده Gutenberg |
| CSS | اختصاصی و ساختاریافته |
| Bootstrap | فعلاً استفاده نشود |
| Tailwind | فعلاً استفاده نشود |
| Build Tool | فعلاً الزامی نیست |
| زبان اصلی فعلی | فارسی |
| جهت اصلی رابط | RTL |
| JavaScript | استاندارد مرورگر، بدون وابستگی غیرضروری |
| همکاری با Claude | دستی و محدود به مأموریت تأییدشده |
| Git | مخزن GitHub و شاخه اصلی `main` |
| GitLab | فعلاً خارج از محدوده پروژه |

تغییر هر یک از این تصمیمات نیازمند بررسی فنی و تأیید کاربر است.

## 3. اصول معماری

اصول زیر باید در طراحی و توسعه رعایت شوند:

- Separation of Concerns
- Reusable Components
- Mobile First
- Progressive Enhancement
- Accessibility First
- Performance First
- WordPress Native
- Maintainability
- Security by Design
- Minimal Dependencies

منطق تجاری مستقل از ظاهر، در صورت شکل‌گیری نیاز واقعی، باید از قالب جدا و در افزونه مستقل پیاده‌سازی شود.

قالب مسئول نمایش، ساختار رابط کاربری و تعاملات وابسته به ظاهر است؛ نباید محل نگهداری منطق حیاتی و مستقل از طراحی سایت باشد.

## 4. معماری کلان

معماری از پنج لایه اصلی تشکیل می‌شود:

1. **WordPress Core:** هسته و APIهای استاندارد WordPress
2. **Theme Layer:** قالب اختصاصی `agency-theme`
3. **Design System:** رنگ‌ها، تایپوگرافی، فاصله‌ها، Grid و اجزای رابط
4. **Interaction Layer:** تعاملات JavaScript و رفتارهای رابط
5. **Content & Media:** محتوای WordPress و دارایی‌های رسانه‌ای

ارتباط لایه‌ها باید روشن و قابل نگهداری باشد. وابستگی غیرضروری میان بخش‌های مختلف ایجاد نشود.

## 5. ساختار هدف پیشنهادی قالب

ساختار زیر نقشه معماری پیشنهادی است، نه فهرست الزامی فایل‌ها.

```text
agency-theme/
│
├── style.css
├── functions.php
│
├── front-page.php
├── home.php                 # فقط در صورت نیاز به تفکیک صفحه نوشته‌ها
├── index.php
├── page.php
├── single.php
├── archive.php
├── search.php
├── 404.php
│
├── header.php
├── footer.php
│
├── inc/
│   ├── setup.php
│   ├── enqueue.php
│   ├── template-functions.php
│   └── accessibility.php
│
├── template-parts/
│   ├── global/
│   ├── components/
│   ├── home/
│   ├── services/
│   ├── portfolio/
│   └── contact/
│
├── assets/
│   ├── css/
│   │   ├── main.css
│   │   ├── abstracts/
│   │   ├── base/
│   │   ├── layout/
│   │   ├── components/
│   │   ├── pages/
│   │   └── editor/
│   │
│   ├── js/
│   │   ├── main.js
│   │   ├── modules/
│   │   └── components/
│   │
│   ├── images/
│   │   ├── branding/
│   │   ├── hero/
│   │   ├── backgrounds/
│   │   └── patterns/
│   │
│   ├── svg/
│   │   ├── icons/
│   │   ├── ornaments/
│   │   └── illustrations/
│   │
│   └── fonts/
│
├── languages/
│
└── docs/
```

### ضوابط ساختار

- ایجاد تمام پوشه‌ها از ابتدا الزامی نیست.
- هر پوشه یا فایل باید دلیل فنی و کاربرد مشخص داشته باشد.
- `functions.php` نقطه ورود و محل بارگذاری بخش‌های موردنیاز خواهد بود.
- مسئولیت‌ها در `inc/` به‌تدریج و براساس رشد و نیاز واقعی تفکیک می‌شوند.
- اجزای قابل استفاده مجدد در `template-parts/` قرار می‌گیرند.
- دارایی‌های ثابت قالب در `assets/` نگهداری می‌شوند.
- رسانه‌های محتوایی در WordPress Media Library قرار می‌گیرند.
- ساختار `parts/` مخصوص معماری Block Theme است و برای قالب کلاسیک الزام ندارد.
- فایل‌ها و پوشه‌های غیرضروری نباید صرفاً برای تکمیل ظاهری ساختار ایجاد شوند.

### نکته مهم درباره Template Hierarchy

قالب باید از Template Hierarchy استاندارد WordPress پیروی کند.

- `front-page.php` برای صفحه نخست
- `home.php` برای صفحه فهرست نوشته‌ها، در صورت نیاز
- `page.php` برای صفحات عمومی
- `single.php` برای نوشته‌های تکی
- `archive.php` برای آرشیوها
- `search.php` برای نتایج جست‌وجو
- `404.php` برای صفحات پیدا نشد

وجود `index.php` به‌عنوان فایل fallback ضروری است.

## 6. PHP و WordPress

### اصول توسعه

- استفاده از APIهای استاندارد WordPress
- رعایت Template Hierarchy
- استفاده اصولی از `get_template_part()`
- رعایت WordPress Coding Standards
- تفکیک مسئولیت‌ها
- جلوگیری از تکرار غیرضروری کد
- رعایت سازگاری با نسخه‌های هدف WordPress و PHP

### امنیت

- اعتبارسنجی ورودی‌ها
- پاک‌سازی داده‌ها متناسب با نوع ورودی
- Escape خروجی براساس Context
- استفاده صحیح از Nonce
- بررسی Capability برای عملیات حساس
- پرهیز از اجرای مستقیم فایل‌های PHP در بخش‌هایی که نیازمند محافظت هستند

توابع متداول Escape شامل:

- `esc_html()`
- `esc_attr()`
- `esc_url()`
- `wp_kses_post()`

هر قابلیت امنیتی باید در محل مناسب خود پیاده‌سازی شود؛ صرف وجود یک فایل با نام امنیتی به معنی تأمین امنیت نیست.

## 7. HTML و دسترس‌پذیری

هدف طراحی، انطباق با WCAG 2.2 سطح AA است.

اصول:

- Semantic HTML
- سلسله‌مراتب منطقی Heading
- شناسه‌های یکتا
- Label مناسب برای فرم‌ها
- Alt متناسب برای تصاویر
- فوکوس قابل مشاهده
- Skip Link
- پشتیبانی کامل از صفحه‌کلید
- نام و نقش قابل تشخیص برای کنترل‌ها
- کنتراست مناسب متن و پس‌زمینه
- رعایت تنظیمات Reduced Motion
- جلوگیری از تداخل ترتیب DOM و ترتیب بصری

**نکته:** اعلام هدف WCAG 2.2 AA به معنی تأیید انطباق نهایی نیست. این انطباق باید با آزمون‌های دستی و ابزارهای مناسب بررسی شود.

## 8. CSS و Design System

CSS اختصاصی مبنای طراحی است.

### لایه‌های پیشنهادی CSS

- Abstracts
- Base
- Layout
- Components
- Pages
- Editor

این تقسیم‌بندی باید به‌تدریج و متناسب با حجم واقعی پروژه اجرا شود.

### اصول

- استفاده از CSS Custom Properties
- استفاده هدفمند از Grid و Flexbox
- رویکرد Mobile First
- جلوگیری از تکرار قوانین
- کنترل Specificity
- محدود کردن `!important`
- مدیریت حالت‌های Focus، Hover، Active و Disabled
- پشتیبانی از RTL و آمادگی برای LTR
- استفاده از Logical Properties در موارد مناسب
- تفکیک سبک‌های عمومی از سبک‌های اختصاصی صفحات

### ارتباط `style.css` و `main.css`

در معماری هدف، نقش این دو باید روشن باشد:

- `style.css`: اطلاعات شناسنامه قالب و در صورت نیاز CSS پایه
- `main.css`: نقطه ورود CSS اختصاصی سایت، در صورت تصویب ساختار نهایی

نحوه بارگذاری و وابستگی این فایل‌ها باید در مرحله Foundation مشخص شود. ایجاد سیستم Import یا Build Tool بدون نیاز و تأیید انجام نمی‌شود.

### رنگ‌های رسمی برند

| نام | کد |
|---|---|
| Navy | `#111C32` |
| Ivory | `#F4EBDD` |
| Gold | `#C6A15B` |
| Turquoise | `#176F70` |
| Burgundy | `#8E493C` |
| Charcoal | `#29272A` |

## 9. Responsive Design و Grid

طراحی باید از موبایل تا نمایشگرهای بزرگ سازگار باشد.

اندازه‌های آزمون پیشنهادی:

- 320px
- 375px
- 640px
- 768px
- 1024px
- 1200px
- 1440px

این اندازه‌ها نقاط آزمون هستند، نه الزام به ایجاد Media Query در تمام این عرض‌ها.

Breakpointها باید براساس شکست واقعی Layout تعیین شوند.

موارد ضروری:

- جلوگیری از Horizontal Overflow
- Container با عرض کنترل‌شده
- فاصله‌گذاری سازگار
- تصاویر Responsive
- تایپوگرافی انعطاف‌پذیر
- رفتار مناسب Header و Navigation
- حفظ خوانایی در عرض‌های کوچک

## 10. JavaScript و تعاملات

JavaScript استاندارد مرورگر در اولویت است.

اصول:

- استفاده از JavaScript فقط در صورت نیاز
- بارگذاری مشروط در صفحات مربوط
- ماژول‌های کوچک و مستقل در صورت رشد پروژه
- جلوگیری از وابستگی غیرضروری
- پشتیبانی از Keyboard Interaction
- مدیریت Focus
- رعایت `prefers-reduced-motion`
- عدم وابستگی رفتار اصلی سایت به JavaScript، در مواردی که Progressive Enhancement ممکن است

Vite، Webpack یا ابزار Build مشابه فعلاً الزامی نیستند.

## 11. Media و Typography

### تصاویر

- استفاده از WebP و AVIF در صورت سازگاری
- تعیین ابعاد مناسب تصاویر
- استفاده از Responsive Images
- Lazy Loading در محل مناسب
- جلوگیری از بارگذاری تصاویر غیرضروری
- بهینه‌سازی حجم و کیفیت

### SVG

- پاک‌سازی و بررسی SVG پیش از استفاده
- پرهیز از کدهای ناامن
- استفاده از SVG برای آیکون‌ها و عناصر گرافیکی مناسب

### ویدئو

در صورت نیاز:

- MP4 یا WebM
- Poster مناسب
- Fallback
- کنترل حجم و بارگذاری

### فونت

- استفاده از WOFF2 در صورت امکان
- بررسی مجوز استفاده
- بارگذاری فقط وزن‌های لازم
- تعیین Fallback مناسب
- بررسی خوانایی فارسی در اندازه‌های مختلف

انتخاب نهایی فونت‌ها هنوز تصمیم قطعی نشده است.

## 12. Gutenberg و مدیریت محتوا

نوع قالب، Classic PHP Theme باقی می‌ماند.

اصول:

- استفاده از بلوک‌های استاندارد WordPress در اولویت
- حفظ کنترل طراحی Frontend
- هماهنگی تدریجی Editor و Frontend
- بررسی `theme.json` براساس نیاز واقعی
- استفاده از Patterns فقط در صورت نیاز
- ساخت Custom Blocks فقط در صورت وجود نیاز مشخص
- بررسی CPT برای خدمات، نمونه‌کارها، نظرات مشتریان یا اعضای تیم پس از تحلیل نیاز محتوا

فعال‌سازی Full Site Editing یا تغییر نوع قالب به Block Theme در محدوده تصمیم فعلی نیست.

## 13. عملکرد، امنیت و SEO

### Performance

- بارگذاری مشروط CSS و JS
- بهینه‌سازی تصاویر
- مدیریت فونت‌ها
- جلوگیری از کد بلااستفاده
- کاهش درخواست‌های غیرضروری
- بررسی Core Web Vitals

### SEO

- HTML معنایی
- ساختار صحیح Heading
- عنوان و توضیحات مناسب
- لینک‌سازی داخلی
- داده ساختاریافته معتبر در صورت نیاز
- سازگاری با افزونه SEO منتخب پروژه، در صورت استفاده

### Security

- رعایت اصول امنیتی WordPress
- اعتبارسنجی ورودی‌ها
- Escape خروجی‌ها
- Nonce و Capability
- پرهیز از افشای اطلاعات حساس
- نگهداری امن تنظیمات و اطلاعات محرمانه

## 14. هویت طراحی WEBHODA

### هویت برند

نام فارسی: «وب هُدیٰ»  
نام لاتین: `WEBHODA`

جهت طراحی:

معماری و هنر ایرانی ـ اسلامی در ترکیب با فناوری مدرن؛ اصیل، لوکس، آینده‌نگر، متعادل و خوانا.

استفاده از عناصر زیر در صورت تناسب با هر بخش:

- قوس و طاق
- گره‌چینی
- هندسه هشت‌پر
- شمسه
- اسلیمی
- تذهیب و تشعیر ظریف

تزئینات نباید خوانایی، عملکرد، سرعت یا دسترس‌پذیری را مختل کنند.

### Hero

جهت طراحی تأییدشده:

**Atrium Hero / Model 3**

ویژگی‌ها:

- تالار معماری شعاعی
- ورودی‌های قوسی
- قاب مرکزی
- حضور برند و پیام در مرکز ترکیب‌بندی
- هماهنگی معماری ایرانی ـ اسلامی با فناوری مدرن

متن، عنوان و CTA باید مستقل از تصویر باشند تا کنترل‌پذیری، Responsive Design و دسترس‌پذیری حفظ شود.

تصویر فعلی Hero در مخزن موجود است؛ اما کیفیت نهایی بصری، حجم و تناسب آن هنوز نیازمند بررسی است.

## 15. وضعیت واقعی مخزن در زمان تصویب نسخه 1.1

این بخش گزارش وضعیت مشاهده‌شده در Audit و تطبیق با شاخه `main` است؛ نه توصیف ساختار هدف.

### موارد تأییدشده

- قالب اختصاصی `agency-theme` وجود دارد.
- فایل‌های `functions.php`، `style.css` و ساختار اصلی قالب وجود دارند.
- `front-page.php` سه بخش Hero، Services و Why WEBHODA را بارگذاری می‌کند.
- فایل‌های Hero، Services و Why WEBHODA وجود دارند.
- تصویر `assets/images/hero/hero-hall.webp` در مخزن وجود دارد.
- فایل `index.php` محتوای آزمایشی دارد.
- `page.php`، `single.php`، `archive.php` و `404.php` در ساختار بررسی‌شده وجود ندارند.
- `theme.json`، پوشه `inc/` و پوشه `assets/js/` در ساختار بررسی‌شده وجود ندارند.
- CSS فعلی در `style.css` و `assets/css/home.css` قرار دارد.
- شش کارت خدمات در بخش Services وجود دارند؛ اما وضعیت آمادگی خدمات هنوز تعیین نشده است.
- لینک‌های CTA به `/contact/` اشاره دارند، در حالی که Template مستقل Contact در ساختار بررسی‌شده وجود ندارد.
- متن Why WEBHODA با محتوای تأییدشده پروژه مطابقت دارد.

### مواردی که نیازمند تکمیل یا تصمیم هستند

- تکمیل Template Hierarchy
- جایگزینی محتوای آزمایشی `index.php`
- تصمیم درباره صفحه Contact
- تعیین وضعیت واقعی خدمات و محتوای نهایی آن‌ها
- بررسی کیفیت و بهینه‌سازی تصویر Hero
- تصمیم درباره فونت و مجوز آن
- تصمیم درباره زبان دوم و پشتیبانی LTR
- تعیین ساختار نهایی CSS
- تعیین نیاز واقعی به JavaScript
- تصمیم درباره `theme.json`، Patterns، Custom Blocks و CPT

### محدودیت شواهد

Audit انجام‌شده عمدتاً ایستا بوده است. آزمون کامل Browser، LocalWP، Lighthouse و Screen Reader برای تمام موارد انجام‌شده تلقی نمی‌شود.

وجود یک فایل یا قابلیت در مخزن به‌تنهایی اثبات‌کننده کیفیت، عملکرد یا انطباق آن نیست.

## 16. نقشه اجرای معماری

اجرای معماری به مراحل زیر تقسیم می‌شود:

### مرحله 1 — Audit و تأیید وضعیت پایه

- بررسی کامل ساختار و فایل‌ها
- تطبیق با آخرین Commit
- ثبت مشکلات و وابستگی‌ها
- تفکیک مشکلات قطعی از پیشنهادها

وضعیت: Audit اولیه انجام شده؛ تکمیل آزمون‌های محیطی و موارد باز همچنان لازم است.

### مرحله 2 — تصویب معماری

- بررسی نسخه 1.1
- تعیین تصمیمات باز
- تثبیت ساختار هدف
- تأیید ترتیب پیاده‌سازی

وضعیت: نسخه 1.1 با تأیید مالک پروژه تصویب شده است.

### مرحله 3 — Foundation

- تکمیل ساختار پایه قالب
- تنظیم Template Hierarchy
- سامان‌دهی بارگذاری منابع
- تعیین ساختار CSS
- تعیین مبانی ترجمه‌پذیری و RTL

### مرحله 4 — Design System

- رنگ‌ها و توکن‌ها
- Typography
- Container و Grid
- Spacing
- اجزای مشترک
- Responsive Rules

### مرحله 5 — PHP و Templates

- Header و Footer
- صفحه نخست
- صفحات عمومی
- Services
- Contact
- Search و 404
- سایر Templateهای موردنیاز

### مرحله 6 — JavaScript

- فقط تعاملات موردنیاز
- Navigation و کنترل‌های تعاملی
- دسترس‌پذیری
- Reduced Motion

### مرحله 7 — Media

- تصاویر
- SVG
- فونت‌ها
- بهینه‌سازی دارایی‌ها

### مرحله 8 — Gutenberg

- بررسی و تنظیم `theme.json`
- هماهنگی Editor و Frontend
- Patterns یا Blocks در صورت نیاز

### مرحله 9 — QA و تحویل

- آزمون Responsive
- آزمون Keyboard
- آزمون Accessibility
- بررسی امنیت
- بررسی Performance
- بررسی SEO
- تست نهایی در LocalWP

هیچ مرحله‌ای بدون بررسی و تأیید نتیجه، تکمیل‌شده اعلام نمی‌شود.

## 17. کنترل تغییرات و همکاری با Claude

تمام مأموریت‌های اجرایی باید شامل موارد زیر باشند:

- هدف مشخص
- محدوده فایل‌های مجاز
- دلیل فنی
- تغییرات مورد انتظار
- روش آزمون
- نتیجه مورد انتظار

در مرحله Audit فقط بررسی انجام می‌شود.

در مرحله Implementation فقط تغییرات تأییدشده مجاز هستند.

Claude نباید Commit یا Push انجام دهد. اعمال تغییرات محلی و عملیات Git توسط کاربر انجام می‌شود.

خروجی Claude باید پیش از اعمال در مخزن توسط ChatGPT بازبینی شود.

## 18. وضعیت تصویب سند

این نسخه 1.1 با تأیید صریح مالک پروژه، مرجع فنی مصوب معماری WEBHODA است.

تصویب این سند به معنی تصویب خودکار تمام تصمیمات باز یا مجوز اجرای تمام موارد ساختار پیشنهادی نیست.

پس از تصویب نسخه 1.1:

1. معماری به‌عنوان مرجع فنی پروژه ثبت می‌شود.
2. موارد باز به تصمیم‌های مستقل تبدیل می‌شوند.
3. نقشه اجرای مرحله‌ای مبنای برنامه‌ریزی قرار می‌گیرد.
4. برای هر مرحله مأموریت محدود و قابل آزمون تعریف خواهد شد.

**اصل نهایی:** هیچ ساختار، فناوری یا قابلیت جدیدی بدون نیاز فنی مشخص و تأیید کاربر به پروژه تحمیل نمی‌شود.

## Addendum — Owner-approved extended Gutenberg implementation

The owner has explicitly approved the extended Level 1 implementation model. This decision refines the controlled Gutenberg support described in v1.1 and is binding for subsequent implementation planning.

- The site remains a Classic PHP Theme.
- Gutenberg is the primary editor for page content. The owner must be able to create and edit the content and composition of all pages and their content sections through the WordPress editor.
- PHP templates remain responsible for the global rendering shell, template hierarchy, and template-level structure. Page content must be rendered through the normal WordPress content flow where appropriate; it must not be unnecessarily hardcoded into PHP template parts.
- Core Blocks are preferred. Patterns are used for reusable compositions; Synced Patterns are reserved for content that genuinely needs to remain synchronized.
- Custom Blocks are permitted only when a demonstrated recurring, data-driven, or interactive requirement cannot be reasonably met with Core Blocks and Patterns.
- Header, Footer, and global settings must be manageable through WordPress administration, including logo, navigation, brand colors, and contact information. Their implementation must remain compatible with the approved Classic Theme model.
- This decision does not approve a Block Theme conversion or full Full Site Editing.
- The Theme remains responsible for presentation and editor integration. A separate plugin for business logic or persistent structured data requires a concrete need and separate owner approval. `agency-core` is not approved.
- Start with Pages and Posts. Add CPTs, taxonomies, and structured fields only when an evidenced content or workflow requirement justifies them.

### Clarifications to existing architecture

- `TYPE-001` and `TYPE-002` in the approved Decision Register govern typography: Estedad/Vazirmatn for Persian and Inter/Plus Jakarta Sans for English, hosted locally. The architecture text that says font selection is still undecided is superseded by these later approved decisions. License and technical integration verification remain implementation tasks.
- `theme.json` remains subject to technical assessment; it is not automatically required.
- Bootstrap, Tailwind, build tools, and additional frameworks remain unapproved unless a concrete need is established and the owner approves.
- The six-section homepage information architecture in DESIGN-003 remains unchanged.
- The initial release scope must be distinguished from the long-term roadmap. Do not treat CRM, customer portals, or complex standalone systems as initial-release requirements.
- The brand slogan “مسیر روشن‌تر، رشد هوشمندانه‌تر” remains proposed until explicit owner approval.

### Implementation consequence

The current static homepage implementation, in which content sections are fixed in PHP and cannot be freely authored in Gutenberg, does not yet satisfy this approved editor model. This is a known implementation gap, not a reason to change the approved architecture.
