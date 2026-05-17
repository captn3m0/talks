% A world without EOLs?
% Nemo | May 17th 02026
% Berlin Permacomputing Meet-Up

# About Me

- Nemo
- https://captnemo.in/contact/
- nemo@endoflife.date
- Fintech, Security, Open-Source, Public Policy, Hacktivist

# Agenda

1. About endoflife.date
2. Learnings & Insights
3. Why do we have EOLs?
4. (Bonus) Why does hardware expire?

# Demo

1. Homepage, Product Page
2. Description, Policy Text
3. Current Version, Table
4. Product Identifiers, API
5. Wiki, WebCAL, RSS

# endoflife.date is a

**Semantic** / **community-moderated** / **wiki** that tracks 
**Lifecycle** of  **Notable Products**

# Some Numbers

- 450+ products
- 20M Web Impressions
- 200K Web Visits
- 1000s of companies
- 1000+ product updates.
- 2+TB/month API Bandwidth

# Learnings

# _everyone_ cares about this

Devices > Operating Systems > Everything else

# Support != Supported

People care about:

1. Security Updates
2. Bug Fixes
3. New Features

# Inventories are great

1. Software Bill of Materials (SBOM)
2. Package URL (PURL)

# CVEs are a lagging indicator

- Is this supported?
- Can I upgrade?

is a better/proactive way to think about patching.

# Chip Obsolescence

International Institute of Obsolescence Management...

# Part 3: A world without EOLs?

Why can't we build software without expiry?

What's your threshold for running:

1. Insecure Software
2. Unmaintained Software
3. Broken Software

# Can you avoid breaking software _with spacetime_?

Only sofware with no bugs is the one with no code.

Every interface boundary is a time-bomb.

# Examples: SecureBoot

Some Windows devices still use Secure Boot certificates issued in 2011, which
will expire in June 2026.

# Examples: TLS Upgrade

Your code works fine with TLS-1.0, but the servers can decide to not use it
anymore

# Examples: Heartbleed, Log4Shell, ReactShell

Your software breaks so badly that you have to fix it.

# Examples: Leap Second, 2038, Y2K, tzdata

Time is a tricky interface. 

# Examples: 3G/2G/CDMA Networks

More G is obviously better.

# Examples: Commercial Changes

- VMWare Licensing Changes
- Google Maps Commercial API Changes
- Twitter Third-Party client terms.

# Examples: Things go away

- NPAPI
- Manifest V2

# How to build permanent software

1. Reinvent the universe.
2. Maintain the universe.
3. Shrink the universe.
4. 
5. ~~Profit~~

# More practically:

If I wanted my software to run in hundred years:

- Distribute complete VMs, and ensure your build tooling is included.
- Local-first _across-the-stack_
- Target Win32-PE/x86_64 if you can.

# Why does hardware expire?

(Pixel 3 story)

# Closing thought

Permaculture takes free labor from the nature.
Computing doesn't get this free-pass.