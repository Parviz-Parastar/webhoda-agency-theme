# WEBHODA — Shared Project Hub

## Purpose
This directory is the shared coordination layer. It does not replace the approved technical architecture or theme source code.

## Source-of-truth order
1. Latest explicit owner-approved decision.
2. Approved decisions in DECISIONS.md.
3. Approved technical architecture at ../MASTER-TECHNICAL-ARCHITECTURE.md.
4. Verified project state in PROJECT-STATUS.md, checked against repository and local test evidence.
5. Active work in TASKS.md.

The existing implementation status document remains at ../docs/WEBHODA-PROJECT-STATUS.md. Do not create competing copies.

## Roles
- Owner: final authority; approves scope, decisions, and acceptance.
- ChatGPT: reads this hub before work, audits evidence, reviews changes, and updates records when GitHub write access is available.
- Claude: reads the latest hub files available at task start; works only within assigned scope; never commits or pushes.

## Mandatory cycle
1. Read README, PROJECT-STATUS, DECISIONS, and TASKS before starting.
2. Confirm the latest main commit and check for newer records.
3. Never treat proposals as approved decisions.
4. Record work as proposed / in progress / blocked / verified / owner-approved. Never claim an unrun test passed.
5. After work, update relevant records with evidence, files changed, tests run, open issues, and next action.
6. Owner applies local changes and controls GitHub Desktop commit/push unless explicitly authorizing another route.

## Safety
- Never overwrite owner-approved decisions silently.
- Never delete or replace existing project documents during routine status updates.
- Keep code changes separate from project-management documentation.
- If local state differs from GitHub, report the mismatch.
- Never store passwords, tokens, private keys, or secrets here.

## Claude access limitation
This repository is canonical, but a free Claude Chat session does not automatically gain live GitHub access. Until a verified integration exists in that Claude environment, the owner must provide the current hub files or links. Never claim automatic synchronization.
