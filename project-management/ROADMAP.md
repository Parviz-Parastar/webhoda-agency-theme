# WEBHODA — Project Roadmap

**Purpose:** phase planning only. Actual completion and evidence are recorded in PROJECT-STATUS.md and TASKS.md. A checked item must never be inferred from a plan.

## Phase 0 — Project governance
- [x] Establish shared GitHub project hub.
- [x] Establish canonical-source policy for shared status and decisions.
- [ ] Complete reconciliation of all standalone Project Knowledge sources.
- [ ] Verify Claude's actual access to the selected GitHub source.

## Phase 1 — Audit and architecture
- [x] Approve Master Technical Architecture v1.1.
- [x] Perform an initial static repository review.
- [ ] Reconcile LocalWP working tree with GitHub main.
- [ ] Complete remaining architecture and implementation gap verification.
- [x] Record the owner-approved extended Level 1 Gutenberg model in DECISIONS.md.
- [x] Add the corresponding architecture addendum to the approved v1.1 technical architecture.
- [x] Align the implementation sequence and initial-release scope with the approved editor model.

## Phase 2 — Foundation
- [ ] Confirm required Template Hierarchy files and fallback behavior.
- [ ] Confirm PHP responsibilities and stylesheet/script loading.
- [ ] Determine final CSS organization based on actual project needs.
- [ ] Review security and accessibility foundations.
- [ ] Establish the Classic Theme Gutenberg content flow so all page content and content sections can be authored and edited in the WordPress editor.
- [ ] Define the PHP template shell versus editor-managed page-content boundary.
- [ ] Establish and verify the Core Blocks and Patterns workflow.
- [ ] Define the WordPress-admin management approach for Header, Footer, and global settings.
- [ ] Document the approved editor workflow and reusable content conventions.

## Phase 3 — Design System
- [ ] Integrate and verify approved local typography (Estedad/Vazirmatn; Inter/Plus Jakarta Sans).
- [ ] Confirm design tokens, containers, spacing, and responsive rules.
- [ ] Verify RTL and any explicitly approved LTR scope.
- [ ] Establish reusable component styles without introducing an unapproved framework.

## Phase 4 — Website templates and content
- [ ] Confirm the approved Gutenberg content workflow is ready before implementing page content.
- [ ] Build page compositions using the approved Gutenberg content model; do not hardcode ordinary page sections in PHP.
- [ ] Confirm Header and Footer behavior.
- [ ] Complete and verify Hero; preserve approved Atrium Hero direction.
- [ ] Complete and verify Services and its standalone page if required.
- [ ] Verify Why WEBHODA against the approved copy.
- [ ] Plan and implement Portfolio / Case Studies.
- [ ] Implement Contact page and validate all contact CTAs.
- [ ] Complete final CTA and remaining page templates.

## Phase 5 — Gutenberg and structured content
- [ ] Implement Synced Patterns only for genuinely shared content that requires synchronization.
- [ ] Assess `theme.json` against the installed WordPress version and actual editor/frontend requirements.
- [ ] Consider Custom Blocks only for evidenced recurring, data-driven, or interactive requirements that Core Blocks and Patterns cannot reasonably satisfy.
- [ ] Consider CPTs, taxonomies, and structured fields only when documented content requirements justify them.
- [ ] Evaluate the Theme/plugin responsibility boundary for any demonstrated business-logic requirement.
- [ ] Do not create `agency-core` without separate owner approval.

## Phase 6 — Quality assurance and release
- [ ] Responsive and overflow testing.
- [ ] Keyboard and accessibility testing.
- [ ] Reduced-motion verification.
- [ ] Security and performance review.
- [ ] Technical SEO review.
- [ ] Final LocalWP acceptance and release preparation.

## Planning rules
- The roadmap is not a status report.
- Do not repeat already accepted tests unless relevant changes create regression risk.
- Reorder or add work only when evidence or an owner-approved decision justifies it.
- Record concrete active work in TASKS.md and verified outcomes in PROJECT-STATUS.md.
