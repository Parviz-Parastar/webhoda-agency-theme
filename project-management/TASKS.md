# WEBHODA — Active Task Register

| ID | Task | Owner | Status | Acceptance evidence / next step |
|---|---|---|---|---|
| HUB-T01 | Create the shared project hub in the existing GitHub repository. | ChatGPT | DONE | Hub files exist on main and were re-fetched; this reconciliation is being prepared on a review branch. |
| HUB-T02 | Verify Claude's practical read access to current hub files. | Owner + ChatGPT | BLOCKED | Run a bounded retrieval test in the actual Claude Chat account and confirm it can quote a current unique line from the selected GitHub source. |
| HUB-T03 | Reconcile the supplied Project Knowledge documents against canonical GitHub sources. | ChatGPT | IN PROGRESS | Architecture v1.0 draft identified as superseded by v1.1; decisions/status/workflow/roadmap reconciliation is being prepared. Complete inventory and review of all standalone Project Knowledge documents remains open. |
| HUB-T04 | Reconcile LocalWP state with GitHub main. | Owner + ChatGPT | NOT STARTED | Compare local working tree and relevant files with commit `7cd316e097bc8bca4358759d910b3d2bc3ed2fc6`; owner confirms the result. |
| HUB-T05 | Consolidate canonical project decisions from approved source documents. | ChatGPT | IN PROGRESS | Confirm every legacy decision ID and migrate the complete approved Why WEBHODA copy without changing wording. |
| HUB-T06 | Retire redundant standalone Project Knowledge uploads after canonical migration. | Owner | BLOCKED | Only after each equivalent GitHub file is complete, verified, and selected in the connected GitHub source. Do not remove unique instructions/context or the connected GitHub source. |

## Rules
- Keep this list short and current.
- A task is DONE only when its acceptance evidence exists.
- Repository existence does not prove LocalWP behavior.
- Tests require a recorded action and observed result.
- Owner approval is recorded separately from technical completion.
- Update this register at the end of meaningful work; do not maintain parallel task lists for individual collaborators.
