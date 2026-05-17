PANDOC := pandoc --embed-resources --standalone -s

HTML_TARGETS := s5.html slidy.html slideous.html dzslides.html revealjs.html

%.html: index.md
	$(PANDOC) -t $* -o $@ $<

%.pdf: index.md
	$(PANDOC) -t $* -o $@ $<

all: $(HTML_TARGETS)

.PHONY: all
