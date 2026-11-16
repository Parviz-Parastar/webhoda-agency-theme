# WEBHODA — Collaboration Workflow

## Start of every task
1. Read `project-management/README.md`, `PROJECT-STATUS.md`, `DECISIONS.md`, and `TASKS.md`.
2. Read `ROADMAP.md` and `MASTER-TECHNICAL-ARCHITECTURE.md` when relevant.
3. Check the latest `main` commit and re-fetch the relevant canonical records.
4. Identify the actual files/versions available. Do not ask the owner to repeat information already present in valid project sources.
5. State the task objective, allowed files, technical reason, risks, and test plan.

## During work
- ChatGPT performs source reconciliation, audits, architecture review, and code review where tools permit.
- Claude may analyze, design, and implement within the assigned scope; do not spend Claude usage on inventories or comparisons ChatGPT can perform.
- Audit is read-only. Implementation is limited to the approved scope.
- Preserve approved copy, identifiers, architecture, and existing behavior unless the owner authorizes a change.
- Escalate owner-level decisions, conflicts, irreversible actions, and scope changes.
- Never claim a test passed unless it was actually run and its result observed.
- Claude must not commit or push.
- The owner controls LocalWP acceptance and GitHub Desktop commit/push unless another route is explicitly authorized.

## End of task
Update the relevant canonical GitHub records, not personal or tool-specific copies. Record:
- work completed and evidence;
- files created or changed;
- tests actually run and observed results;
- approved decisions and proposals separately;
- blockers and next action.

Update PROJECT-STATUS.md for meaningful state changes, DECISIONS.md for owner-approved decisions, TASKS.md for active work, and ROADMAP.md when phase planning changes.

## Shared source and access
GitHub is the canonical shared source for Project Status, Decision Register, Tasks, Roadmap, Workflow, and approved shared specifications. Do not maintain parallel copies for ChatGPT or Claude.

GitHub being canonical does not prove Claude Chat Free has live access. Verify the actual integration in the user's Claude environment. If Claude cannot read the latest selected files, provide the current canonical file contents/links for that task. Do not promise automatic or background synchronization.

## Document retirement
A standalone uploaded Project Knowledge file may be retired only after:
1. its content has been fully compared with the canonical GitHub equivalent;
2. all unique approved information has been migrated;
3. the GitHub file has been re-fetched and verified;
4. the canonical GitHub source remains selected and accessible to the collaborator.

Do not delete unique context/instructions, historical evidence, or the connected GitHub source as part of routine cleanup.
