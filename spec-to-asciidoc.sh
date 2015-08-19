#!/bin/sh
export SPEC_SRC=omni-spec-md.md
export SPEC_ADOC=omni-spec.adoc
export FROM_FMT=markdown_github
export TO_FMT=asciidoc
export SRC_DIR=src/jbake/content
pandoc ${SRC_DIR}/${SPEC_SRC} -f ${FROM_FMT} -t ${TO_FMT} --atx-headers --base-header-level=2 -s -o ${SRC_DIR}/${SPEC_ADOC}
