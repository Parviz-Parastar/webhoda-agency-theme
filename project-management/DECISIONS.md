# WEBHODA — Decision Register

Only explicit owner-approved decisions belong in the approved register. Suggestions and unresolved questions must remain outside it.

## Approved project and collaboration decisions

| ID | Decision | Status |
|---|---|---|
| HUB-001 | Use the existing `Parviz-Parastar/webhoda-agency-theme` repository as the shared project-management source; do not create a parallel repository. | APPROVED |
| HUB-002 | Keep the approved technical architecture at the repository root and reference it rather than maintaining a duplicate. | APPROVED |
| HUB-003 | ChatGPT and Claude consult the latest shared records before each task and report evidence afterward. | APPROVED |
| HUB-004 | The owner remains final approver; Claude must not commit or push. | APPROVED |
| HUB-005 | Project Status and Decision Register are canonical GitHub records. All collaborators read and update the same shared records; no separately maintained ChatGPT/Claude copies. Apply the same rule to other documents requiring simultaneous shared access. | APPROVED |
| HUB-006 | ChatGPT is the project's primary technical architect and implementation lead, responsible for architecture decisions within the approved scope, PHP/HTML/CSS/JavaScript/SVG development, UI/UX implementation, code review, and quality control. All work must comply with the latest owner-approved project records and technical constraints. | APPROVED |
| HUB-007 | Claude serves as an independent senior reviewer at important project checkpoints. Claude is not the primary developer or day-to-day implementation agent. Its role is to review architecture, critical technical decisions, and substantial changes when an independent review adds meaningful value. | APPROVED |
| HUB-008 | The owner retains final decision-making authority, applies approved changes to the local Windows/LocalWP environment, performs or directs local testing, approves results, and controls all Git operations, including commits and pushes. ChatGPT and Claude must not claim direct access to the owner's local environment or repository operations. | APPROVED |
| HUB-009 | The standard development cycle consists of six stages: (1) define the task objective and scope; (2) inspect the actual relevant files and dependencies; (3) implement only the approved changes; (4) conduct an independent Claude review at designated important checkpoints; (5) have the owner apply and test the changes in LocalWP; and (6) obtain owner approval before recording and committing the verified result. No stage may be reported as completed without evidence. | APPROVED |
| BRAND-001 | The exact Persian brand name is «وب هُدیٰ» and the Latin name is `WEBHODA`. | APPROVED |
| BRAND-002 | Brand values include divine guidance, honest service, trustworthiness, justice, responsibility, and sustainable value creation. | APPROVED |
| BRAND-003 | The visual identity combines Iranian-Islamic architecture and art with modern technology; it should remain authentic, refined, future-oriented, balanced, and readable. | APPROVED |
| BRAND-004 | Public claims must remain truthful: do not promise guaranteed results or invent clients, statistics, testimonials, case studies, or execution history. Classify each service as Ready, Under Development, or Future Roadmap before presenting its readiness. | APPROVED |
| DESIGN-001 | The official palette is Navy `#111C32`, Ivory `#F4EBDD`, Gold `#C6A15B`, Turquoise `#176F70`, Burgundy `#8E493C`, and Charcoal `#29272A`. | APPROVED |
| DESIGN-002 | The selected homepage Hero direction is Atrium Hero — Model 3, with a radial hall and arched entrances; the central architectural frame is retained. Text and CTA should remain separate HTML/SVG elements where practical. | APPROVED |
| DESIGN-003 | The homepage information architecture contains Header, Hero, Services, Portfolio/Case Studies, Why WEBHODA, and final CTA/Footer. | APPROVED |
| DESIGN-004 | Hero may include people or other living beings only in a limited, purposeful supporting role. Iranian-Islamic architecture and WEBHODA's architectural identity must remain dominant; composition must preserve artistic balance, brand clarity, and readability. | APPROVED |
| CONTENT-001 | The supplied Why WEBHODA copy is approved and must not be rewritten without explicit owner permission. | APPROVED |
| CONTENT-002 | The six proposed service categories are not evidence that the services are operationally ready. Each service's readiness must be confirmed by the owner and represented truthfully as Ready, Under Development, or Future Roadmap. | APPROVED |
| TYPE-001 | Persian primary font: Estedad; Persian fallback: Vazirmatn. English primary font: Inter; English fallback: Plus Jakarta Sans. | APPROVED |
| TYPE-002 | Fonts are to be hosted locally; do not use a font CDN. | APPROVED |
| TECH-001 | The site uses WordPress, LocalWP, and the custom `agency-theme` theme, based on a Hybrid Classic PHP Theme with controlled Gutenberg support. | APPROVED |
| TECH-002 | Use custom structured CSS. Do not add Bootstrap or Tailwind for now. | APPROVED |
| TECH-003 | A build tool or additional framework is not approved unless a concrete technical need is established and the owner approves it. | APPROVED |

| TECH-004 | The site remains a Classic PHP Theme with the owner-approved extended Level 1 Gutenberg implementation. Gutenberg must allow the owner to create and edit the content of all pages and their content sections. PHP templates remain responsible for the site template structure and rendering shell. This does not approve a Block Theme or full Full Site Editing migration. | APPROVED |
| TECH-005 | Reusable content compositions should use WordPress Core Blocks and Patterns; Synced Patterns may be used for genuinely shared content. Custom Blocks require a demonstrated recurring, data-driven, or interactive need that Core Blocks and Patterns cannot reasonably satisfy. | APPROVED |
| TECH-006 | Header, Footer, and global site settings must be manageable from WordPress administration, including the logo, navigation, brand colors, and contact information. The implementation method must use an appropriate WordPress-native approach and remain within the approved Classic Theme architecture. | APPROVED |
| TECH-007 | The Theme owns presentation, templates, styles, and editor integration. Business logic and data that must survive a theme change may be placed in a separate plugin only when a concrete requirement justifies it. The custom `agency-core` plugin is not approved at this time. | APPROVED |
| CONTENT-003 | The initial release scope is limited to Home, About, Contact, services confirmed as genuinely ready, real portfolio/case-study material with publication permission, a quality-controlled Knowledge Center scope, and necessary legal pages. CRM, customer portals, complex operational systems, and standalone products remain future roadmap items unless separately approved. | APPROVED |
| CONTENT-004 | Pages and Posts are the initial content foundation. CPTs, taxonomies, and structured fields must be introduced only when an evidenced requirement such as independent archives, fixed fields, relationships, filtering, or a separate lifecycle justifies them. | APPROVED |

## Approved Why WEBHODA copy — exact owner-supplied text

The following is transcribed from the owner-provided `template-parts/home/why-webhoda.php` source. Preserve the Persian wording exactly; PHP translation wrappers and markup are omitted, but the visible copy is retained verbatim.

**Section eyebrow**

> چرا وب هُدیٰ؟

**Section heading**

> همراه شما در مسیر رشد؛ فراتر از یک همکاری دیجیتال

**Introduction**

> ما در وب هُدیٰ، فناوری، استراتژی و خلاقیت را در کنار هم قرار می‌دهیم تا کسب‌وکار شما حضوری مؤثرتر در فضای دیجیتال داشته باشد، مشتریان بیشتری جذب کند و برای رشد پایدار آماده شود.

**Pillar 01 — شناخت کسب‌وکار، پیش از آغاز راه**

> هر کسب‌وکار مسیر و نیازهای منحصربه‌فرد خود را دارد. پیش از هر اقدامی، اهداف، مخاطبان و ظرفیت‌های کسب‌وکار شما را بررسی می‌کنیم تا راهکارها بر پایه شناخت و متناسب با واقعیت‌های شما شکل بگیرند.

**Pillar 02 — تمرکز بر نتیجه و ارزش‌آفرینی**

> زیبایی و کیفیت اجرا، تنها بخشی از یک راهکار موفق است. طراحی و بازاریابی باید به اهداف واقعی کسب‌وکار کمک کنند؛ از افزایش دیده‌شدن و جذب مشتری تا بهبود تجربه مخاطب و تقویت مسیر فروش.

**Pillar 03 — پیوند استراتژی، خلاقیت و فناوری**

> از طراحی وب‌سایت و بهینه‌سازی موتورهای جست‌وجو تا تولید محتوا و ابزارهای هوشمند، راهکارهای دیجیتال را در مسیری منسجم به هم پیوند می‌دهیم تا هر بخش، مکمل بخش دیگر باشد.

**Pillar 04 — رشد مستمر، نه یک تحویل مقطعی**

> همکاری را با تحویل یک پروژه پایان‌یافته نمی‌دانیم. بررسی عملکرد، تحلیل داده‌ها و بهبود مستمر، زمینه تصمیم‌گیری دقیق‌تر و حرکت هدفمندتر کسب‌وکار شما را فراهم می‌کند.

**Pledge heading**

> تعهد ما؛ صداقت در مسیر، امانت‌داری در همکاری

**Pledge text**

> نام وب هُدیٰ یادآور مفهوم هدایت است؛ مفهومی که در نگاه ما با مسئولیت‌پذیری، شفافیت و خدمت صادقانه معنا پیدا می‌کند. به همین دلیل، آنچه ارائه می‌دهیم بر پایه واقعیت، تخصص و تعهد است؛ نه وعده‌های اغراق‌آمیز و نتایج تضمین‌نشده.

---

## Approved source documents
- Technical architecture: [MASTER-TECHNICAL-ARCHITECTURE.md v1.1](../MASTER-TECHNICAL-ARCHITECTURE.md).
- The complete owner-approved Why WEBHODA copy is recorded verbatim in the section above, transcribed from the owner-supplied theme template. CONTENT-001 remains in force: do not rewrite this copy without explicit owner permission.

## Open questions — not decisions
- Whether the hero visual constraint V-005 is fully consistent across all historical architecture versions; the latest explicit owner-approved decision takes precedence.
- Final Hero headline and supporting copy.
- Whether and when to implement `theme.json`, Patterns, custom Blocks, or CPTs.
- Whether a second language and LTR support are required in the initial release.
- Final CSS module/loading structure.
- Final local font integration and license verification.
- Exact implementation scope and sequence for Services, Portfolio, Contact, and CTA.
- The exact need and scope of `theme.json` after reviewing the actual WordPress and theme versions.
- The number and types of required Patterns and Synced Patterns.
- Any specific Custom Block requirement.
- Any specific CPT/Taxonomy requirement.
- Second language and LTR scope.
- Final CSS structure and asset-loading method.
- Timing and implementation details for Header/Footer administration.
- Final brand slogan.
- “مسیر روشن‌تر، رشد هوشمندانه‌تر” is proposed and is not APPROVED until explicit owner approval.
- “رشد دیجیتال، با هدایت الهی” must not be used in the public header without renewed owner approval.

## Change control
Never convert a proposal into an approved decision. When the owner approves a new decision, add it here with a stable ID, date/context if useful, and a concise statement. If a decision is superseded, retain its history and mark it SUPERSEDED rather than silently deleting it.
