<?php

declare(strict_types=1);

namespace Psalm\Issue;

final class DeprecatedClass extends ClassIssue
{
    public const ERROR_LEVEL = 2;
    public const SHORTCODE = 98;
}
