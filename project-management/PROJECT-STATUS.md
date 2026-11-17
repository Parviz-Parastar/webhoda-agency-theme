# WEBHODA — Shared Project Status

**Last repository verification:** 2026-11-17  
**Repository:** Parviz-Parastar/webhoda-agency-theme  
**Branch:** main  
**Verified HEAD:** 7cd316e097bc8bca4358759d910b3d2bc3ed2fc6  
**LocalWP parity:** Not verified in this update  
**Browser/visual/functional QA:** Not performed in this update

## 1. Project environment
- CMS: WordPress
- Local development: LocalWP
- Local site: `agency-dev.local`
- Theme: `agency-theme`
- Local theme path: `C:\Users\Jhabiz\Local Sites\agency-dev\app\public\wp-content\themes\agency-theme\`
- Canonical repository: `Parviz-Parastar/webhoda-agency-theme`
- Canonical branch: `main`

## 2. Approved architecture and constraints
The approved technical reference is [MASTER-TECHNICAL-ARCHITECTURE.md v1.1](../MASTER-TECHNICAL-ARCHITECTURE.md).

- Hybrid Classic WordPress Theme with controlled Gutenberg support.
- Custom, structured CSS.
- Do not add Bootstrap or Tailwind for now.
- No build tool is required at this stage.
- Keep JavaScript dependency-light and use native browser capabilities where practical.
- RTL, responsive behavior, accessibility, keyboard support, and reduced-motion support are project requirements.
- Do not introduce new frameworks, dependencies, or architecture without a concrete need and owner approval.

## 3. Verified repository facts
The following were checked against GitHub `main` on 2026-11-17:
- `main` points to commit `7cd316e097bc8bca4358759d910b3d2bc3ed2fc6`.
- The repository contains the approved root architecture document, `MASTER-TECHNICAL-ARCHITECTURE.md` v1.1.
- The shared project hub exists under `project-management/`.
- `docs/WEBHODA-PROJECT-STATUS.md` exists, but contains historical status statements that conflict with later repository evidence and is not the live status source.
- The root theme files and asset/template directories were present in the repository audit. Presence does not prove runtime correctness.

Relevant files previously inspected include:
- `style.css`
- `functions.php`
- `front-page.php`
- `assets/css/home.css`
- `project-management/README.md`
- `project-management/PROJECT-STATUS.md`
- `project-management/DECISIONS.md`
- `project-management/TASKS.md`
- `project-management/WORKFLOW.md`
- `MASTER-TECHNICAL-ARCHITECTURE.md`
- `docs/WEBHODA-PROJECT-STATUS.md`

## 4. Implementation status — evidence-qualified
Previously recorded owner-confirmed progress:
- Header, Hero, Services, and Why WEBHODA have been represented in the homepage implementation.
- Hero and Services had previously been visually/responsively approved.
- Accessibility checks previously reported as completed include Skip Link/focus behavior, Search/Escape, keyboard focus, responsive behavior, and reduced-motion handling.
- The six Services cards were reported to render correctly and without misleading hover interaction.
- Why WEBHODA copy was approved and must not be rewritten without explicit permission.

These are historical project records, not tests rerun on 2026-11-17. Re-test only when a relevant change or regression warrants it.

Repository observations from the prior static audit:
- `front-page.php` includes Hero, Services, and Why template parts.
- `functions.php` enqueues the global stylesheet and homepage stylesheet.
- The current stylesheet still referenced Tahoma/Georgia in the inspected revision; the approved local font families had not yet been confirmed as integrated into CSS.
- Font files in the repository do not by themselves prove correct @font-face setup, licensing review, or browser rendering.
- The repository status document under `docs/` contains outdated claims, including that Why was not built. Treat it as a historical source pending a deliberate archival update; do not use it as the current status register.

## 5. Not verified in this update
- Whether the LocalWP working tree matches commit `7cd316e`.
- Current live behavior in the browser.
- Current status of the latest local changes to Why WEBHODA.
- Full Template Hierarchy state and whether `index.php` / `page.php` are complete.
- Whether font files, font-face declarations, and license records are fully integrated and validated.
- Hero image optimization and current asset weight.
- Lighthouse, full WCAG audit, and screen-reader verification.
- Current completeness of Services, Portfolio, Contact, and final CTA content/pages.

## 6. Known documentation conflicts to resolve
- `docs/WEBHODA-PROJECT-STATUS.md` is an older status document and conflicts with later implementation evidence. This shared status file supersedes it for current coordination.
- The uploaded draft architecture v1.0 is superseded by the approved repository architecture v1.1.
- Older project context documents may contain outdated Bootstrap references or phase gates. The approved architecture and DECISIONS.md take precedence.
- Claude's practical live GitHub access is not yet verified. A GitHub Project Knowledge source being configured is not sufficient evidence that Claude can always retrieve the latest branch content.

## 7. Additional source material received — pending reconciliation

The owner supplied a document named `WEBHODA_CURRENT_THEME_SOURCE.txt` containing a snapshot of these theme files: `style.css`, `functions.php`, `header.php`, `footer.php`, `front-page.php`, `index.php`, `search.php`, `assets/css/home.css`, and `template-parts/home/hero.php`.

This is owner-supplied source text, not a fresh fetch of the LocalWP working tree or current GitHub branch. Its own recorded path points to the LocalWP theme directory, but its currentness and parity with GitHub have not been verified.

Notable observations from that supplied snapshot:
- `front-page.php` calls only the Hero template part; it does not call a Services template part.
- The supplied `template-parts/home/hero.php` contains the Hero section only.
- The supplied `header.php` has no visible Skip Link.
- The supplied `style.css` uses Tahoma and Georgia tokens and a single gold `:focus-visible` outline; it does not show the proposed two-layer focus treatment.
- `assets/css/home.css` includes a reduced-motion rule for Hero buttons.
- `index.php` contains placeholder English content.

These observations conflict with later repository audit notes that describe Services and Why template parts in `front-page.php`, and with historical status statements about accessibility. Do not choose one as current without fetching the relevant files from the current GitHub branch and checking LocalWP. No runtime or browser test was performed from this source text.

## 8. Current coordination state
- Shared project hub: created and re-fetched from GitHub.
- Canonical source-of-truth policy: owner-approved; see DECISIONS.md.
- Architecture v1.1: approved and retained without duplication.
- Decision register: reconciliation in progress; verified brand claim rules and the detailed Hero living-being constraint have been consolidated. The exact approved Why WEBHODA copy remains unmigrated because its full source text was not available.
- Project Knowledge cleanup: not performed. Do not delete standalone uploads until canonical equivalents are complete, verified on GitHub, and selected in the connected GitHub source.
- LocalWP-to-GitHub reconciliation: not performed.

## 9. Next actions
1. Complete review of all Claude Project Knowledge documents against the canonical GitHub records.
2. Confirm Claude's actual access method to the selected GitHub source.
3. Compare LocalWP working tree with the verified GitHub main commit.
4. Refresh implementation status only from new repository/local/browser evidence.
5. Remove redundant standalone Project Knowledge uploads only after the matching canonical GitHub documents are complete and accessible; retain unique instructions/context until migrated.

## 10. Update protocol
At the end of each meaningful work session, update this file and the relevant decision/task/roadmap records in GitHub. Record only work actually performed and evidence observed. Do not maintain separate status copies for ChatGPT or Claude.
