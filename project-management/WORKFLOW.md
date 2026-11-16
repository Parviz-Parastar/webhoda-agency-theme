# WEBHODA — Collaboration Workflow

## Start of every task
1. Read project-management/README.md, PROJECT-STATUS.md, DECISIONS.md, and TASKS.md.
2. Read linked source documents only when relevant.
3. Check the current branch/commit and identify newer updates.
4. State task scope, permitted files, risks, and test plan.

## During work
- ChatGPT handles source comparison, audits, architecture review, and quality control where tools permit.
- Claude may analyze, design, and implement within explicit scope. Do not waste Claude usage on file inventory or comparisons ChatGPT can perform.
- Escalate owner-level decisions, conflicts, irreversible actions, or scope changes.
- Do not modify unrelated files.

## End of task
Record completed work, files changed, tests actually run and results, proposed versus approved decisions, blockers, and next action.

ChatGPT may update project-management records directly when connected GitHub permissions allow. Claude must not commit or push. The owner controls local application, GitHub Desktop commit/push, and final acceptance unless separately authorized.

## Synchronization limitation
GitHub is the canonical shared record, not an automatic memory-sync mechanism. ChatGPT can re-read and update it when GitHub tools are connected. Claude Chat Free has no assumed live repository access: verify an available integration in the user's account; otherwise provide the current small set of hub files/links for each task. Never claim background or automatic syncing that has not been tested.
