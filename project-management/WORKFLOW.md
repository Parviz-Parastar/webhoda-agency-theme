# WEBHODA — Collaboration Workflow

## Start of every task
1. Read `project-management/README.md`, `PROJECT-STATUS.md`, `DECISIONS.md`, and `TASKS.md`.
2. Read `ROADMAP.md` and `MASTER-TECHNICAL-ARCHITECTURE.md` when relevant.
3. Verify the latest available GitHub state and re-fetch relevant canonical records when access permits. Never assume that a local working tree, Project Knowledge snapshot, or previously retrieved file is current.
4. Identify the actual files/versions available. Do not ask the owner to repeat information already present in valid project sources.
5. State the task objective, allowed files, technical reason, risks, and test plan.

## During work
- ChatGPT performs source reconciliation, audits, architecture review, and code review where tools permit.
- Claude Chat Free works manually with files and content supplied by the owner. It has no assumed direct access to local files, terminal, or Git. Claude may analyze and produce scoped code or documentation; the owner applies approved changes manually. Do not spend Claude usage on inventories or comparisons ChatGPT can perform.
- Audit is read-only. Implementation is limited to the approved scope.
- Preserve approved copy, identifiers, architecture, and existing behavior unless the owner authorizes a change.
- Escalate owner-level decisions, conflicts, irreversible actions, and scope changes.
- Never claim a test passed unless it was actually run and its result observed.
- Claude must not commit or push.
- The owner controls LocalWP acceptance and GitHub Desktop commit/push unless another route is explicitly authorized.

### Approved Gutenberg implementation constraint

- The owner-approved extended Level 1 Gutenberg model is a fixed project decision. Do not ask the owner to choose between implementation levels again.
- Keep the site as a Classic PHP Theme; do not convert it to a Block Theme or full FSE without a separate owner decision.
- All page content and content sections must be authorable/editable through Gutenberg. PHP templates provide the rendering shell and template hierarchy, not hardcoded ordinary page content.
- Use Core Blocks and Patterns first. Use Synced Patterns only when synchronized shared content is required.
- Do not create custom Blocks, CPTs, a custom core plugin, or new frameworks without a demonstrated need and owner approval.
- Header, Footer, and global settings must be manageable from WordPress administration.
- Preserve the exact approved Why WEBHODA copy and all approved brand decisions.

## End of task
Prepare updates for the relevant canonical GitHub records. The owner controls publication through GitHub Desktop. After owner-controlled publication, re-fetch and verify the canonical files when access permits. Never describe local changes as published or canonical before verification. Record:
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
