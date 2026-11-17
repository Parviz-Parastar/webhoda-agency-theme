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

## Approved source documents
- Technical architecture: [MASTER-TECHNICAL-ARCHITECTURE.md v1.1](../MASTER-TECHNICAL-ARCHITECTURE.md).
- The exact approved Why WEBHODA copy must remain unchanged. Its complete text was not present in the source material available during this reconciliation, and repository search did not locate it. Therefore, the copy has **not** been migrated or reconstructed. Keep CONTENT-001 in force and block retirement of the legacy source until the owner supplies the exact copy or its authoritative source is located.

## Open questions — not decisions
- Whether the hero visual constraint V-005 is fully consistent across all historical architecture versions; the latest explicit owner-approved decision takes precedence.
- Final Hero headline and supporting copy.
- Whether and when to implement `theme.json`, Patterns, custom Blocks, or CPTs.
- Whether a second language and LTR support are required in the initial release.
- Final CSS module/loading structure.
- Final local font integration and license verification.
- Exact implementation scope and sequence for Services, Portfolio, Contact, and CTA.

## Change control
Never convert a proposal into an approved decision. When the owner approves a new decision, add it here with a stable ID, date/context if useful, and a concise statement. If a decision is superseded, retain its history and mark it SUPERSEDED rather than silently deleting it.
