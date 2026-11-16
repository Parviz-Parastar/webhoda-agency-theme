# WEBHODA — Shared Project Hub

## Purpose
This directory is the canonical coordination source for WEBHODA. Shared project records are maintained here in GitHub, not as separate ChatGPT or Claude copies.

## Canonical records
- [Project Status](PROJECT-STATUS.md): verified current state, evidence, tests, and open issues.
- [Decision Register](DECISIONS.md): owner-approved decisions and unresolved conflicts.
- [Active Tasks](TASKS.md): current work, ownership, blockers, and acceptance evidence.
- [Roadmap](ROADMAP.md): ordered phases and planned outcomes; not a completion record.
- [Collaboration Workflow](WORKFLOW.md): rules for all collaborators.
- [Master Technical Architecture](../MASTER-TECHNICAL-ARCHITECTURE.md): approved technical architecture v1.1.

## Source-of-truth rules
1. The latest explicit owner-approved decision takes precedence.
2. Approved decisions are recorded in DECISIONS.md.
3. The approved technical architecture governs technical structure and constraints.
4. PROJECT-STATUS.md records actual state and must distinguish repository evidence from LocalWP/browser verification.
5. TASKS.md records active work; ROADMAP.md records the broader plan.
6. Proposals, assumptions, and unverified reports must never be presented as approved facts.

## Mandatory collaboration cycle
### Before work
1. Read this README, PROJECT-STATUS.md, DECISIONS.md, and TASKS.md.
2. Read ROADMAP.md and the architecture when relevant.
3. Check the latest main commit and the current versions of relevant files.
4. State scope, allowed files, risks, and test plan.

### During work
- Preserve approved decisions and existing functionality.
- Audit is read-only; implementation is limited to an explicitly approved scope.
- Do not infer local state from GitHub or claim tests that were not run.
- Do not create parallel copies of canonical records in personal/project knowledge stores.

### At the end of work
Update the relevant canonical GitHub records with:
- work completed and its evidence;
- files changed;
- tests actually run and observed results;
- owner decisions and approvals;
- blockers and next action.

## Roles
- Owner: final authority; controls LocalWP acceptance and GitHub commit/push unless explicitly authorizing another route.
- ChatGPT: architecture, audit, code review, evidence checks, and maintenance of shared records when authorized and connected.
- Claude: analysis and implementation within the assigned scope; no commit or push.

## Claude and synchronization
GitHub is the canonical source, but this does not prove that Claude Chat Free has live access to the repository. Verify the actual access method in the user's Claude environment. If direct access is unavailable, provide the current canonical files or links for that task. Never claim automatic/background synchronization.

## Safety
- Never overwrite owner-approved decisions silently.
- Never delete historical or source documents during routine updates.
- Keep code changes separate from project-management documentation.
- If LocalWP differs from GitHub, report the mismatch.
- Never store passwords, tokens, private keys, or other secrets here.
