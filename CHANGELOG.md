
# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/) and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## Public API

The [public API](https://semver.org/spec/v2.0.0.html#spec-item-1) of this project is defined by the `install.yaml` 
file and `project_files` listed in the `install.yaml` file.

------

## [1.4.0](https://github.com/julienloizelet/ddev-crowdsec-php/releases/tag/v1.4.0) - 2023-07-11
[_Compare with previous release_](https://github.com/julienloizelet/ddev-crowdsec-php/compare/v1.3.0...v1.4.0)

### Changed

- Update `runActions.php` script for CrowdSec Engine Magento 2 extension (add alert method)

---

## [1.3.0](https://github.com/julienloizelet/ddev-crowdsec-php/releases/tag/v1.3.0) - 2023-07-07
[_Compare with previous release_](https://github.com/julienloizelet/ddev-crowdsec-php/compare/v1.2.0...v1.3.0)

### Changed

- Update `runActions.php` script for CrowdSec Engine Magento 2 extension

---


## [1.2.0](https://github.com/julienloizelet/ddev-crowdsec-php/releases/tag/v1.2.0) - 2023-07-07
[_Compare with previous release_](https://github.com/julienloizelet/ddev-crowdsec-php/compare/v1.1.0...v1.2.0)

### Added

- Add `runActions.php` script for CrowdSec Engine Magento 2 extension

---

## [1.1.0](https://github.com/julienloizelet/ddev-crowdsec-php/releases/tag/v1.1.0) - 2023-07-06
[_Compare with previous release_](https://github.com/julienloizelet/ddev-crowdsec-php/compare/v1.0.1...v1.1.0)

### Added

- Add `docker-compose.override.yaml` for Playwright test and CrowdSec Engine Magento 2 extension

---


## [1.0.1](https://github.com/julienloizelet/ddev-crowdsec-php/releases/tag/v1.0.1) - 2023-06-01
[_Compare with previous release_](https://github.com/julienloizelet/ddev-crowdsec-php/compare/v1.0.0...v1.0.1)

### Fixed

- Fix `crowdsec-config` content for WordPress multisite

---

## [1.0.0](https://github.com/julienloizelet/ddev-crowdsec-php/releases/tag/v1.0.0) - 2023-05-19
[_Compare with previous release_](https://github.com/julienloizelet/ddev-crowdsec-php/compare/v0.0.13...v1.0.0)

### Changed

- Change `crowdsec-config` content for WordPress multisite

---

## [0.0.13](https://github.com/julienloizelet/ddev-crowdsec-php/releases/tag/v0.0.13) - 2023-04-17
[_Compare with previous release_](https://github.com/julienloizelet/ddev-crowdsec-php/compare/v0.0.12...v0.0.13)

### Changed

- Change `standalone-settings.php` content for WordPress scripts

---


## [0.0.12](https://github.com/julienloizelet/ddev-crowdsec-php/releases/tag/v0.0.12) - 2023-04-12
[_Compare with previous release_](https://github.com/julienloizelet/ddev-crowdsec-php/compare/v0.0.11...v0.0.12)

### Changed

- Change paths for standalone bouncer `auto_prepend_file` files

---


## [0.0.11](https://github.com/julienloizelet/ddev-crowdsec-php/releases/tag/v0.0.11) - 2023-04-11
[_Compare with previous release_](https://github.com/julienloizelet/ddev-crowdsec-php/compare/v0.0.10...v0.0.11)

### Changed

- Use new path for standalone bouncer `auto_prepend_file` files

---

## [0.0.10](https://github.com/julienloizelet/ddev-crowdsec-php/releases/tag/v0.0.10) - 2023-04-07
[_Compare with previous release_](https://github.com/julienloizelet/ddev-crowdsec-php/compare/v0.0.9...v0.0.10)

### Changed

- Use `crowdsec-config` only in `crowdsec-standalone-bouncer` project instead of `crowdsec-bouncer-lib`

---

## [0.0.9](https://github.com/julienloizelet/ddev-crowdsec-php/releases/tag/v0.0.9) - 2023-03-24
[_Compare with previous release_](https://github.com/julienloizelet/ddev-crowdsec-php/compare/v0.0.8...v0.0.9)

### Changed

- Change path for the CrowdSec php bouncer lib


---

## [0.0.8](https://github.com/julienloizelet/ddev-crowdsec-php/releases/tag/v0.0.8) - 2023-03-23
[_Compare with previous release_](https://github.com/julienloizelet/ddev-crowdsec-php/compare/v0.0.7...v0.0.8)

### Changed

- Change `crowdsec-config` for native php to run only if crowdsec-bouncer-lib project is detected


---


## [0.0.7](https://github.com/julienloizelet/ddev-crowdsec-php/releases/tag/v0.0.7) - 2023-03-23
[_Compare with previous release_](https://github.com/julienloizelet/ddev-crowdsec-php/compare/v0.0.6...v0.0.7)

### Changed

- Rename development folder `my-own-modules` to `my-code`


---


## [0.0.6](https://github.com/julienloizelet/ddev-crowdsec-php/releases/tag/v0.0.6) - 2023-03-17
[_Compare with previous release_](https://github.com/julienloizelet/ddev-crowdsec-php/compare/v0.0.5...v0.0.6)

### Changed

- List each file individually in `project_files`

### Added

- Add `post_install_actions` to copy some DDEV project type files

---

## [0.0.5](https://github.com/julienloizelet/ddev-crowdsec-php/releases/tag/v0.0.5) - 2023-03-15
[_Compare with previous release_](https://github.com/julienloizelet/ddev-crowdsec-php/compare/v0.0.4...v0.0.5)

### Fixed

- Add missing cfssl files


---

## [0.0.4](https://github.com/julienloizelet/ddev-crowdsec-php/releases/tag/v0.0.4) - 2023-03-15
[_Compare with previous release_](https://github.com/julienloizelet/ddev-crowdsec-php/compare/v0.0.3...v0.0.4)

### Changed

- Update ddev signature in all files

### Removed

- Remove some cfssl files

---



## [0.0.3](https://github.com/julienloizelet/ddev-crowdsec-php/releases/tag/v0.0.3) - 2023-03-15
[_Compare with previous release_](https://github.com/julienloizelet/ddev-crowdsec-php/compare/v0.0.2...v0.0.3)

### Changed

- Update ddev signature in all files

---

## [0.0.2](https://github.com/julienloizelet/ddev-crowdsec-php/releases/tag/v0.0.2) - 2023-03-14
[_Compare with previous release_](https://github.com/julienloizelet/ddev-crowdsec-php/compare/v0.0.1...v0.0.2)

### Changed

- Add ddev signature in all files

---


## [0.0.1](https://github.com/julienloizelet/ddev-crowdsec-php/releases/tag/v0.0.1) - 2023-03-14

- Initial release

