# multipart-encoding in emails
\-nemo

---
# history of email RFCs

Date|RFC|Title
----|-----|-----
Jun '73|524|A Proposed Mail Protocol
Sep '73|561|Standardizing Network Mail Headers
Apr '75|680|Message Transmission Protocol
May '77|724|Proposed Official Standard for the Format of ARPA Network Messages
Nov '77|733|STANDARD FOR THE FORMAT OF ARPA NETWORK TEXT MESSAGES(1)
Aug '82|821|SIMPLE MAIL TRANSFER PROTOCOL
Aug '82|822|STANDARD FOR THE FORMAT OF ARPA INTERNET TEXT MESSAGES
Jan '86|974|MAIL ROUTING AND THE DOMAIN SYSTEM
Apr '86|983|ISO Transport Services on Top of the TCP
May '87|1006|ISO Transport Service on top of the TCP
Oct '89|1123|Requirements for Internet Hosts -- Application and Support
Dec '89|1138|Mapping between X.400(1988) / ISO 10021 and RFC 822
Mar '90|1148|Mapping between X.400(1988) / ISO 10021 and RFC 822
May '92|1327|Mapping between X.400(1988) / ISO 10021 and RFC 822
Aug '93|1495|Mapping between X.400 and RFC-822 Message Bodies
Nov '95|1869|SMTP Service Extensions
Mar '97|2111|Content-ID and Message-ID Uniform Resource Locators
Jan '98|2156|MIXER (Mime Internet X.400 Enhanced Relay): Mapping between X.400 and RFC 822/MIME
Aug '98|2387|The MIME Multipart/Related Content-type
Aug '98|2392|Content-ID and Message-ID Uniform Resource Locators
Apr '01|2821|Simple Mail Transfer Protocol
Apr '01|2822|Internet Message Format
Oct '08|5321|Simple Mail Transfer Protocol
Oct '08|5322|Internet Message Format

---


# email protocols

1. how to talk to an email server (SMTP)
  - TCP
  - DNS
2. how to format a message?
  - Media types (MIME)
  - how to format dates?
  - html
3. how to receive email?
  - IMAP
  - POP

---
# mainline

Date|RFC|Title
----|-----|-----
Aug '82|821|SIMPLE MAIL TRANSFER PROTOCOL
Aug '82|822|STANDARD FOR THE FORMAT OF ARPA INTERNET TEXT MESSAGES
Apr '01|2821|Simple Mail Transfer Protocol
Apr '01|2822|Internet Message Format
Oct '08|5321|Simple Mail Transfer Protocol
Oct '08|5322|Internet Message Format

---

# how to send emails

Date|RFC|Title
----|-----|-----
Aug '82|821|SIMPLE MAIL TRANSFER PROTOCOL
Apr '01|2821|Simple Mail Transfer Protocol
Oct '08|5321|Simple Mail Transfer Protocol

---

# how to write emails

Date|RFC|Title
----|-----|-----
Aug '82|822|STANDARD FOR THE FORMAT OF ARPA INTERNET TEXT MESSAGES
Apr '01|2822|Internet Message Format
Oct '08|5322|Internet Message Format

---

# the multipart-variation

Date|RFC|Title
----|-----|-----
Mar '97|2111|Content-ID and Message-ID Uniform Resource Locators
Aug '98|2392|Content-ID and Message-ID Uniform Resource Locators

---

# what's multi-part?

```
POST / HTTP/1.1
[[ Less interesting headers ... ]]
Content-Type: multipart/form-data; boundary=--boundary
Content-Length: 834

--boundary
Content-Disposition: form-data; name="text1"

text default
--boundary
Content-Disposition: form-data; name="text2"

```

---

```
From: foo1@bar.net
To: foo2@bar.net
Subject: A simple example
Mime-Version: 1.0
Content-Type: multipart/alternate; boundary="never-graduate";
--never-graduate
Content-Type: Text/HTML; charset=US-ASCII
Content-Id: <html.foo1@bar.net>

This is <strong>My HTML</strong> email.

--never-graduate

Content-Id: <plaintext.foo1@bar.net>
Content-Type: text/plain

This is my plaintext email.

--never-graduate--
```

---

# multi-part-linking

Date|RFC|Title
----|-----|-----
Mar '97|2111|Content-ID and Message-ID Uniform Resource Locators
Aug '98|2392|Content-ID and Message-ID Uniform Resource Locators

---

# multi-part-linking

Scheme|Name
---|---
`cid:`|Content ID URL Scheme
`mid:`|Message ID URL Scheme

---

# definitions

```
content-id    = url-addr-spec
message-id    = url-addr-spec

url-addr-spec = addr-spec  ; URL encoding of RFC 822 addr-spec

cid-url       = "cid" ":" content-id
mid-url       = "mid" ":" message-id [ "/" content-id ]
```

---

# plain english

* Content and Message IDs are emails
* CID/MID URLs are `cid:$CID`, `mid:$MID`, and `mid:$MID/$CID`

---

# so how does it work?

```
From: foo1@bar.net
To: foo2@bar.net
Subject: A simple example
Mime-Version: 1.0
Content-Type: multipart/related; boundary="never-graduate";type=Text/HTML

--never-graduate
Content-Type: Text/HTML; charset=US-ASCII

to the other body part, for example through a statement such as:
<img src="cid:foo4*foo1@bar.net">

--never-graduate

Content-ID: <foo4*foo1@bar.net>
Content-Type: IMAGE/GIF
Content-Transfer-Encoding: BASE64

R0lGODlhGAGgAPEAAP/////ZRaCgoAAAACH+PUNvcHlyaWdodCAoQykgMTk5
NSBJRVRGLiBVbmF1dGhvcml6ZWQgZHVwbGljYXRpb24gcHJvaGliaXRlZC4A
etc...

--never-graduate--
# remember to pitch for RFCs We Love
```