# CHANGELOG

## [2.0.0] - 2026-10-14

### Changed
* [BC] Requires PHP 8.5
* [BC] `ProvidingContext::setContext()` returns `static` instead of `self`
* [BC] `RepresentsDate::diff()` parameter is named `$anotherDate` and `$absolute` defaults to `false`
* [BC] `RepresentsString::matchRegularExpression()` types `$matches` as `?array`

### Removed
* Requirement of `ext-json`, which is always available since PHP 8.0
