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

## Phase 2 — Foundation
- [ ] Confirm required Template Hierarchy files and fallback behavior.
- [ ] Confirm PHP responsibilities and stylesheet/script loading.
- [ ] Determine final CSS organization based on actual project needs.
- [ ] Review security and accessibility foundations.

## Phase 3 — Design System
- [ ] Integrate and verify approved local typography (Estedad/Vazirmatn; Inter/Plus Jakarta Sans).
- [ ] Confirm design tokens, containers, spacing, and responsive rules.
- [ ] Verify RTL and any explicitly approved LTR scope.
- [ ] Establish reusable component styles without introducing an unapproved framework.

## Phase 4 — Website templates and content
- [ ] Confirm Header and Footer behavior.
- [ ] Complete and verify Hero; preserve approved Atrium Hero direction.
- [ ] Complete and verify Services and its standalone page if required.
- [ ] Verify Why WEBHODA against the approved copy.
- [ ] Plan and implement Portfolio / Case Studies.
- [ ] Implement Contact page and validate all contact CTAs.
- [ ] Complete final CTA and remaining page templates.

## Phase 5 — Gutenberg and structured content
- [ ] Assess actual need for `theme.json`.
- [ ] Decide whether Patterns or custom Blocks are justified.
- [ ] Decide whether Services/Portfolio require CPTs or structured fields.
- [ ] Keep business-critical logic outside the theme where appropriate.

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
