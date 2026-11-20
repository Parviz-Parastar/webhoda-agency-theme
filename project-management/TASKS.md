# WEBHODA — Active Task Register

| ID | Task | Owner | Status | Acceptance evidence / next step |
|---|---|---|---|---|
| HUB-T01 | Create the shared project hub in the existing GitHub repository. | ChatGPT | DONE | Hub files exist on main and were re-fetched; this reconciliation is being prepared on a review branch. |
| HUB-T02 | Verify Claude's practical read access to current hub files. | Owner + ChatGPT | BLOCKED | Run a bounded retrieval test in the actual Claude Chat account and confirm it can quote a current unique line from the selected GitHub source. |
| HUB-T03 | Reconcile the supplied Project Knowledge documents against canonical GitHub sources. | ChatGPT | IN PROGRESS | Architecture v1.1 and the canonical decisions, status, roadmap, and workflow sources have been reviewed. Documentation reconciliation changes have been applied locally. Complete inventory and review of all standalone Project Knowledge documents remains open. Final acceptance requires owner-controlled publication and verification against canonical GitHub files. |
| HUB-T04 | Reconcile LocalWP state and the owner-supplied theme snapshot with GitHub main. | Owner + ChatGPT | NOT STARTED | Fetch current theme files from GitHub main and compare with the supplied snapshot; then owner confirms LocalWP working-tree parity. The supplied snapshot currently conflicts with later repository audit notes (notably Services/Why template loading and accessibility). |
| HUB-T05 | Consolidate canonical project decisions from approved source documents. | ChatGPT | IN PROGRESS | Legacy decision IDs and approved brand rules have been reviewed. The exact approved Why WEBHODA copy is preserved in the canonical decisions source and must not be paraphrased or reconstructed. The extended Gutenberg decision and related approved constraints have been added locally; final acceptance requires canonical GitHub verification. |
| HUB-T06 | Retire redundant standalone Project Knowledge uploads after canonical migration. | Owner | BLOCKED | Only after each equivalent GitHub file is complete, verified, and selected in the connected GitHub source. Do not remove unique instructions/context or the connected GitHub source. |

## Rules
- Keep this list short and current.
- A task is DONE only when its acceptance evidence exists.
- Repository existence does not prove LocalWP behavior.
- Tests require a recorded action and observed result.
- Owner approval is recorded separately from technical completion.
- Update this register at the end of meaningful work; do not maintain parallel task lists for individual collaborators.

### Documentation alignment — extended Gutenberg decision

- **Status:** IN PROGRESS until canonical GitHub files are updated and re-fetched.
- **Scope:** `DECISIONS.md`, root `MASTER-TECHNICAL-ARCHITECTURE.md`, `PROJECT-STATUS.md`, `ROADMAP.md`, `WORKFLOW.md`, and `TASKS.md`.
- **Allowed changes:** documentation only.
- **Out of scope:** theme code, LocalWP configuration/database, Git branch operations, commit, push, deletion of historical/backup files.
- **Acceptance:** all owner-approved decisions are represented accurately; v1.1 history and exact approved Why copy are preserved; no proposed item is promoted to APPROVED; canonical files are re-fetched from GitHub after owner-controlled push.
