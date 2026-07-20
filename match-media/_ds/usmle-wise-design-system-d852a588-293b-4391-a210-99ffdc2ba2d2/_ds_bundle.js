/* @ds-bundle: {"format":3,"namespace":"USMLEWiseDesignSystem_d852a5","components":[{"name":"Button","sourcePath":"components/actions/Button.jsx"},{"name":"IconButton","sourcePath":"components/actions/IconButton.jsx"},{"name":"Avatar","sourcePath":"components/display/Avatar.jsx"},{"name":"Badge","sourcePath":"components/display/Badge.jsx"},{"name":"Card","sourcePath":"components/display/Card.jsx"},{"name":"ProgressBar","sourcePath":"components/display/ProgressBar.jsx"},{"name":"Alert","sourcePath":"components/feedback/Alert.jsx"},{"name":"Callout","sourcePath":"components/feedback/Callout.jsx"},{"name":"Tabs","sourcePath":"components/feedback/Tabs.jsx"},{"name":"Checkbox","sourcePath":"components/forms/Checkbox.jsx"},{"name":"Field","sourcePath":"components/forms/Field.jsx"},{"name":"Input","sourcePath":"components/forms/Input.jsx"},{"name":"Switch","sourcePath":"components/forms/Switch.jsx"}],"sourceHashes":{"components/actions/Button.jsx":"a644e5041b8a","components/actions/IconButton.jsx":"61b31f01fada","components/display/Avatar.jsx":"5f26193e8f3f","components/display/Badge.jsx":"1398581a3a7a","components/display/Card.jsx":"4599c2c13a93","components/display/ProgressBar.jsx":"f30cc5f19cc4","components/feedback/Alert.jsx":"140e2c8050a5","components/feedback/Callout.jsx":"34816257252b","components/feedback/Tabs.jsx":"fdf3d319c067","components/forms/Checkbox.jsx":"f34f0e7aeead","components/forms/Field.jsx":"80af98a90622","components/forms/Input.jsx":"37cb711f018d","components/forms/Switch.jsx":"32c2b232b338","ui_kits/icons.js":"2ba04e0b36d9","ui_kits/marketing/Landing.jsx":"a4b2bb611f3b","ui_kits/student_app/AppShell.jsx":"51cdf366a08c","ui_kits/student_app/screens.jsx":"b96061461a8c","uploads/script.js":"a643b812761b"},"inlinedExternals":[],"unexposedExports":[]} */

(() => {

const __ds_ns = (window.USMLEWiseDesignSystem_d852a5 = window.USMLEWiseDesignSystem_d852a5 || {});

const __ds_scope = {};

(__ds_ns.__errors = __ds_ns.__errors || []);

// components/actions/Button.jsx
try { (() => {
function _extends() { return _extends = Object.assign ? Object.assign.bind() : function (n) { for (var e = 1; e < arguments.length; e++) { var t = arguments[e]; for (var r in t) ({}).hasOwnProperty.call(t, r) && (n[r] = t[r]); } return n; }, _extends.apply(null, arguments); }
const SIZES = {
  xs: {
    padding: "6px 10px",
    fontSize: 12
  },
  sm: {
    padding: "8px 14px",
    fontSize: 13
  },
  md: {
    padding: "12px 20px",
    fontSize: 14
  },
  lg: {
    padding: "14px 24px",
    fontSize: 15
  },
  xl: {
    padding: "18px 32px",
    fontSize: 16
  }
};
function variantStyle(variant, hover) {
  switch (variant) {
    case "secondary":
      return {
        background: hover ? "var(--uw-blue-600)" : "var(--uw-blue-500)",
        color: "#fff",
        boxShadow: hover ? "var(--shadow-blue)" : "var(--shadow-sm)"
      };
    case "outline":
      return {
        background: hover ? "var(--uw-ink-75)" : "#fff",
        color: "var(--uw-ink-800)",
        borderColor: hover ? "var(--uw-ink-700)" : "var(--uw-border-strong)"
      };
    case "ghost":
      return {
        background: hover ? "var(--uw-ink-75)" : "transparent",
        color: hover ? "var(--uw-ink-900)" : "var(--uw-ink-700)"
      };
    case "link":
      return {
        background: "transparent",
        color: hover ? "var(--uw-blue-700)" : "var(--uw-blue-500)",
        padding: "6px 4px",
        textDecoration: hover ? "underline" : "none",
        boxShadow: "none"
      };
    case "primary":
    default:
      return {
        background: hover ? "var(--uw-red-600)" : "var(--uw-red-500)",
        color: "#fff",
        boxShadow: hover ? "var(--shadow-red)" : "var(--shadow-sm)"
      };
  }
}

/**
 * USMLE Wise primary button. Wise Red = primary action (one per screen),
 * USMLE Blue = secondary. Outline / ghost / link for lower emphasis.
 */
function Button({
  variant = "primary",
  size = "md",
  fullWidth = false,
  disabled = false,
  leadingIcon = null,
  trailingIcon = null,
  children,
  style = {},
  ...rest
}) {
  const [hover, setHover] = React.useState(false);
  const sz = SIZES[size] || SIZES.md;
  return /*#__PURE__*/React.createElement("button", _extends({
    disabled: disabled,
    onMouseEnter: () => setHover(true),
    onMouseLeave: () => setHover(false),
    style: {
      display: fullWidth ? "flex" : "inline-flex",
      width: fullWidth ? "100%" : undefined,
      alignItems: "center",
      justifyContent: "center",
      gap: 8,
      fontFamily: "var(--font-sans)",
      fontWeight: 500,
      lineHeight: 1,
      letterSpacing: "-0.005em",
      borderRadius: "var(--r-md)",
      border: "1px solid transparent",
      cursor: disabled ? "not-allowed" : "pointer",
      whiteSpace: "nowrap",
      opacity: disabled ? 0.45 : 1,
      transition: "transform var(--dur-fast), background var(--dur-fast), box-shadow var(--dur-med), border-color var(--dur-fast)",
      ...sz,
      ...variantStyle(variant, hover && !disabled),
      ...style
    }
  }, rest), leadingIcon, children, trailingIcon);
}
Object.assign(__ds_scope, { Button });
})(); } catch (e) { __ds_ns.__errors.push({ path: "components/actions/Button.jsx", error: String((e && e.message) || e) }); }

// components/actions/IconButton.jsx
try { (() => {
function _extends() { return _extends = Object.assign ? Object.assign.bind() : function (n) { for (var e = 1; e < arguments.length; e++) { var t = arguments[e]; for (var r in t) ({}).hasOwnProperty.call(t, r) && (n[r] = t[r]); } return n; }, _extends.apply(null, arguments); }
/**
 * Square icon-only button. Mirrors Button variants but sized for a single icon.
 * Always pass an aria-label for accessibility.
 */
function IconButton({
  variant = "ghost",
  size = 38,
  disabled = false,
  ariaLabel,
  children,
  style = {},
  ...rest
}) {
  const [hover, setHover] = React.useState(false);
  const variants = {
    primary: {
      background: hover ? "var(--uw-red-600)" : "var(--uw-red-500)",
      color: "#fff",
      border: "1px solid transparent"
    },
    secondary: {
      background: hover ? "var(--uw-blue-600)" : "var(--uw-blue-500)",
      color: "#fff",
      border: "1px solid transparent"
    },
    outline: {
      background: hover ? "var(--uw-ink-75)" : "#fff",
      color: "var(--uw-ink-800)",
      border: "1px solid var(--uw-border-strong)"
    },
    ghost: {
      background: hover ? "var(--uw-ink-75)" : "transparent",
      color: hover ? "var(--uw-ink-900)" : "var(--uw-ink-600)",
      border: "1px solid transparent"
    }
  };
  return /*#__PURE__*/React.createElement("button", _extends({
    "aria-label": ariaLabel,
    disabled: disabled,
    onMouseEnter: () => setHover(true),
    onMouseLeave: () => setHover(false),
    style: {
      width: size,
      height: size,
      display: "inline-flex",
      alignItems: "center",
      justifyContent: "center",
      borderRadius: "var(--r-md)",
      cursor: disabled ? "not-allowed" : "pointer",
      opacity: disabled ? 0.45 : 1,
      transition: "background var(--dur-fast), color var(--dur-fast)",
      ...(variants[variant] || variants.ghost),
      ...style
    }
  }, rest), children);
}
Object.assign(__ds_scope, { IconButton });
})(); } catch (e) { __ds_ns.__errors.push({ path: "components/actions/IconButton.jsx", error: String((e && e.message) || e) }); }

// components/display/Avatar.jsx
try { (() => {
/**
 * Circular avatar with initials (or an image) and an optional online dot.
 * Gradient tones echo the brand palette.
 */
function Avatar({
  initials,
  src,
  size = 56,
  tone = "blue",
  online = false,
  style = {}
}) {
  const grads = {
    blue: "linear-gradient(135deg, var(--uw-blue-400), var(--uw-blue-700))",
    red: "linear-gradient(135deg, var(--uw-red-400), var(--uw-red-700))",
    green: "linear-gradient(135deg, #6dbf8e, var(--uw-success-700))"
  };
  return /*#__PURE__*/React.createElement("span", {
    style: {
      position: "relative",
      display: "inline-block",
      flexShrink: 0,
      ...style
    }
  }, /*#__PURE__*/React.createElement("span", {
    style: {
      width: size,
      height: size,
      borderRadius: "50%",
      display: "grid",
      placeItems: "center",
      overflow: "hidden",
      background: src ? "var(--uw-ink-100)" : grads[tone] || grads.blue,
      color: "#fff",
      fontFamily: "var(--font-display)",
      fontSize: size * 0.4,
      letterSpacing: "-0.02em"
    }
  }, src ? /*#__PURE__*/React.createElement("img", {
    src: src,
    alt: initials || "",
    style: {
      width: "100%",
      height: "100%",
      objectFit: "cover"
    }
  }) : initials), online && /*#__PURE__*/React.createElement("span", {
    style: {
      position: "absolute",
      bottom: 0,
      right: 0,
      width: Math.max(10, size * 0.22),
      height: Math.max(10, size * 0.22),
      background: "var(--uw-success-500)",
      border: "2px solid #fff",
      borderRadius: "50%"
    }
  }));
}
Object.assign(__ds_scope, { Avatar });
})(); } catch (e) { __ds_ns.__errors.push({ path: "components/display/Avatar.jsx", error: String((e && e.message) || e) }); }

// components/display/Badge.jsx
try { (() => {
/** Small status/label pill. Tones map to the semantic palette. */
function Badge({
  tone = "neutral",
  solid = false,
  dot = false,
  children,
  style = {}
}) {
  const tones = {
    blue: {
      bg: "var(--uw-blue-50)",
      fg: "var(--uw-blue-700)"
    },
    red: {
      bg: "var(--uw-red-50)",
      fg: "var(--uw-red-700)"
    },
    green: {
      bg: "var(--uw-success-50)",
      fg: "var(--uw-success-700)"
    },
    amber: {
      bg: "var(--uw-warning-50)",
      fg: "var(--uw-warning-700)"
    },
    neutral: {
      bg: "var(--uw-ink-75)",
      fg: "var(--uw-ink-700)"
    }
  };
  const t = tones[tone] || tones.neutral;
  const bg = solid ? "var(--uw-blue-500)" : t.bg;
  const fg = solid ? "#fff" : t.fg;
  return /*#__PURE__*/React.createElement("span", {
    style: {
      display: "inline-flex",
      alignItems: "center",
      gap: 4,
      fontSize: 11.5,
      fontWeight: 500,
      padding: "3px 9px",
      borderRadius: "var(--r-pill)",
      letterSpacing: "0.01em",
      background: bg,
      color: fg,
      ...style
    }
  }, dot && /*#__PURE__*/React.createElement("span", {
    style: {
      width: 6,
      height: 6,
      borderRadius: "50%",
      background: "currentColor"
    }
  }), children);
}
Object.assign(__ds_scope, { Badge });
})(); } catch (e) { __ds_ns.__errors.push({ path: "components/display/Badge.jsx", error: String((e && e.message) || e) }); }

// components/display/Card.jsx
try { (() => {
function _extends() { return _extends = Object.assign ? Object.assign.bind() : function (n) { for (var e = 1; e < arguments.length; e++) { var t = arguments[e]; for (var r in t) ({}).hasOwnProperty.call(t, r) && (n[r] = t[r]); } return n; }, _extends.apply(null, arguments); }
/**
 * Surface container. Variants: default (bordered), elevated (shadow),
 * flat (no shadow), accent (USMLE Blue fill). `hover` lifts on mouse-over.
 */
function Card({
  variant = "default",
  hover = false,
  children,
  style = {},
  ...rest
}) {
  const [over, setOver] = React.useState(false);
  const base = {
    default: {
      background: "var(--uw-surface)",
      border: "1px solid var(--uw-border)",
      boxShadow: "none"
    },
    flat: {
      background: "var(--uw-surface)",
      border: "1px solid var(--uw-border)",
      boxShadow: "none"
    },
    elevated: {
      background: "var(--uw-surface)",
      border: "1px solid transparent",
      boxShadow: "var(--shadow-md)"
    },
    accent: {
      background: "var(--uw-blue-500)",
      border: "1px solid var(--uw-blue-700)",
      color: "#fff"
    }
  }[variant] || {};
  const lift = hover && over ? {
    boxShadow: "var(--shadow-md)",
    transform: "translateY(-2px)",
    borderColor: "var(--uw-border-strong)"
  } : {};
  return /*#__PURE__*/React.createElement("div", _extends({
    onMouseEnter: () => setOver(true),
    onMouseLeave: () => setOver(false),
    style: {
      borderRadius: "var(--r-lg)",
      padding: "var(--space-5)",
      transition: "box-shadow var(--dur-med), transform var(--dur-med), border-color var(--dur-med)",
      ...base,
      ...lift,
      ...style
    }
  }, rest), children);
}
Object.assign(__ds_scope, { Card });
})(); } catch (e) { __ds_ns.__errors.push({ path: "components/display/Card.jsx", error: String((e && e.message) || e) }); }

// components/display/ProgressBar.jsx
try { (() => {
/** Horizontal progress bar. Color tones: blue (default), red, green. */
function ProgressBar({
  value = 0,
  tone = "blue",
  height = 8,
  style = {}
}) {
  const fills = {
    blue: "var(--uw-blue-500)",
    red: "var(--uw-red-500)",
    green: "var(--uw-success-500)"
  };
  const pct = Math.max(0, Math.min(100, value));
  return /*#__PURE__*/React.createElement("div", {
    role: "progressbar",
    "aria-valuenow": pct,
    "aria-valuemin": 0,
    "aria-valuemax": 100,
    style: {
      background: "var(--uw-ink-100)",
      height,
      borderRadius: 999,
      overflow: "hidden",
      ...style
    }
  }, /*#__PURE__*/React.createElement("div", {
    style: {
      width: `${pct}%`,
      height: "100%",
      borderRadius: 999,
      background: fills[tone] || fills.blue,
      transition: "width 600ms var(--ease-out)"
    }
  }));
}
Object.assign(__ds_scope, { ProgressBar });
})(); } catch (e) { __ds_ns.__errors.push({ path: "components/display/ProgressBar.jsx", error: String((e && e.message) || e) }); }

// components/feedback/Alert.jsx
try { (() => {
/** Inline alert with a colored status glyph. */
function Alert({
  tone = "info",
  icon,
  title,
  children,
  style = {}
}) {
  const dot = {
    info: "var(--uw-blue-500)",
    warn: "var(--uw-warning-500)",
    error: "var(--uw-danger-500)",
    ok: "var(--uw-success-500)"
  };
  return /*#__PURE__*/React.createElement("div", {
    style: {
      display: "flex",
      gap: 12,
      alignItems: "flex-start",
      padding: "14px 16px",
      borderRadius: "var(--r-md)",
      border: "1px solid var(--uw-border)",
      background: "var(--uw-surface)",
      fontSize: 13.5,
      ...style
    }
  }, /*#__PURE__*/React.createElement("span", {
    style: {
      width: 22,
      height: 22,
      borderRadius: "50%",
      display: "grid",
      placeItems: "center",
      fontWeight: 700,
      fontSize: 12,
      flexShrink: 0,
      color: "#fff",
      background: dot[tone] || dot.info
    }
  }, icon), /*#__PURE__*/React.createElement("div", null, title && /*#__PURE__*/React.createElement("div", {
    style: {
      fontWeight: 600,
      color: "var(--uw-ink-900)",
      marginBottom: 2
    }
  }, title), /*#__PURE__*/React.createElement("div", {
    style: {
      color: "var(--uw-ink-600)"
    }
  }, children)));
}
Object.assign(__ds_scope, { Alert });
})(); } catch (e) { __ds_ns.__errors.push({ path: "components/feedback/Alert.jsx", error: String((e && e.message) || e) }); }

// components/feedback/Callout.jsx
try { (() => {
/** Tinted advisory block with an optional bold title. */
function Callout({
  tone = "blue",
  title,
  children,
  style = {}
}) {
  const tones = {
    blue: {
      border: "var(--uw-blue-100)",
      bg: "var(--uw-blue-50)"
    },
    red: {
      border: "var(--uw-red-100)",
      bg: "var(--uw-red-50)"
    },
    amber: {
      border: "#f3d98a",
      bg: "var(--uw-warning-50)"
    },
    success: {
      border: "#8ecfb0",
      bg: "var(--uw-success-50)"
    }
  };
  const t = tones[tone] || tones.blue;
  return /*#__PURE__*/React.createElement("div", {
    style: {
      border: `1.5px solid ${t.border}`,
      background: t.bg,
      borderRadius: "var(--r-md)",
      padding: "var(--space-4) var(--space-5)",
      fontSize: 13.5,
      lineHeight: 1.55,
      color: "var(--uw-ink-800)",
      ...style
    }
  }, title && /*#__PURE__*/React.createElement("b", {
    style: {
      color: "var(--uw-ink-900)",
      display: "block",
      marginBottom: 4,
      fontWeight: 600
    }
  }, title), children);
}
Object.assign(__ds_scope, { Callout });
})(); } catch (e) { __ds_ns.__errors.push({ path: "components/feedback/Callout.jsx", error: String((e && e.message) || e) }); }

// components/feedback/Tabs.jsx
try { (() => {
/** Underlined tab bar. Active tab underlined in Wise Red. */
function Tabs({
  tabs = [],
  value,
  onChange,
  style = {}
}) {
  return /*#__PURE__*/React.createElement("div", {
    style: {
      display: "inline-flex",
      borderBottom: "1px solid var(--uw-border)",
      ...style
    }
  }, tabs.map(t => {
    const id = typeof t === "string" ? t : t.id;
    const label = typeof t === "string" ? t : t.label;
    const active = id === value;
    return /*#__PURE__*/React.createElement("button", {
      key: id,
      onClick: () => onChange && onChange(id),
      style: {
        fontFamily: "var(--font-sans)",
        background: "none",
        border: "none",
        padding: "12px 16px",
        fontSize: 13.5,
        cursor: "pointer",
        color: active ? "var(--uw-ink-900)" : "var(--uw-ink-500)",
        fontWeight: active ? 600 : 400,
        borderBottom: active ? "2px solid var(--uw-red-500)" : "2px solid transparent",
        marginBottom: -1,
        transition: "color var(--dur-fast)"
      }
    }, label);
  }));
}
Object.assign(__ds_scope, { Tabs });
})(); } catch (e) { __ds_ns.__errors.push({ path: "components/feedback/Tabs.jsx", error: String((e && e.message) || e) }); }

// components/forms/Checkbox.jsx
try { (() => {
/** Custom checkbox styled with USMLE Blue when checked. */
function Checkbox({
  checked,
  onChange,
  label,
  disabled = false,
  style = {}
}) {
  return /*#__PURE__*/React.createElement("label", {
    style: {
      display: "inline-flex",
      alignItems: "center",
      gap: 10,
      fontSize: 14,
      color: "var(--uw-ink-800)",
      cursor: disabled ? "not-allowed" : "pointer",
      opacity: disabled ? 0.5 : 1,
      ...style
    }
  }, /*#__PURE__*/React.createElement("span", {
    style: {
      width: 18,
      height: 18,
      borderRadius: 4,
      border: checked ? "1.5px solid var(--uw-blue-500)" : "1.5px solid var(--uw-border-strong)",
      background: checked ? "var(--uw-blue-500)" : "#fff",
      display: "grid",
      placeItems: "center",
      transition: "all var(--dur-fast)",
      flexShrink: 0
    }
  }, checked && /*#__PURE__*/React.createElement("span", {
    style: {
      width: 10,
      height: 6,
      borderLeft: "2px solid #fff",
      borderBottom: "2px solid #fff",
      transform: "rotate(-45deg) translate(1px, -1px)"
    }
  })), /*#__PURE__*/React.createElement("input", {
    type: "checkbox",
    checked: checked,
    disabled: disabled,
    onChange: onChange,
    style: {
      position: "absolute",
      opacity: 0,
      width: 0,
      height: 0
    }
  }), label);
}
Object.assign(__ds_scope, { Checkbox });
})(); } catch (e) { __ds_ns.__errors.push({ path: "components/forms/Checkbox.jsx", error: String((e && e.message) || e) }); }

// components/forms/Field.jsx
try { (() => {
/**
 * Labelled form field wrapper. Renders a label, the control (children),
 * and an optional hint or error message with consistent spacing.
 */
function Field({
  label,
  htmlFor,
  hint,
  error,
  children,
  style = {}
}) {
  return /*#__PURE__*/React.createElement("div", {
    style: {
      display: "flex",
      flexDirection: "column",
      gap: 6,
      ...style
    }
  }, label && /*#__PURE__*/React.createElement("label", {
    htmlFor: htmlFor,
    style: {
      fontSize: 13,
      fontWeight: 500,
      color: "var(--uw-ink-800)"
    }
  }, label), children, error ? /*#__PURE__*/React.createElement("span", {
    style: {
      fontSize: 12,
      color: "var(--uw-danger-500)",
      display: "flex",
      alignItems: "center",
      gap: 4
    }
  }, error) : hint ? /*#__PURE__*/React.createElement("span", {
    style: {
      fontSize: 12,
      color: "var(--uw-ink-500)"
    }
  }, hint) : null);
}
Object.assign(__ds_scope, { Field });
})(); } catch (e) { __ds_ns.__errors.push({ path: "components/forms/Field.jsx", error: String((e && e.message) || e) }); }

// components/forms/Input.jsx
try { (() => {
function _extends() { return _extends = Object.assign ? Object.assign.bind() : function (n) { for (var e = 1; e < arguments.length; e++) { var t = arguments[e]; for (var r in t) ({}).hasOwnProperty.call(t, r) && (n[r] = t[r]); } return n; }, _extends.apply(null, arguments); }
/**
 * Text input. Supports an optional leading icon and an error state.
 * Focus ring uses USMLE Blue; error uses Danger (never Wise Red).
 */
function Input({
  error = false,
  leadingIcon = null,
  style = {},
  ...rest
}) {
  const [focus, setFocus] = React.useState(false);
  const [hover, setHover] = React.useState(false);
  const borderColor = error ? "var(--uw-danger-500)" : focus ? "var(--uw-blue-500)" : hover ? "var(--uw-ink-500)" : "var(--uw-border-strong)";
  const ring = focus ? `0 0 0 3px ${error ? "var(--uw-danger-100)" : "var(--uw-blue-100)"}` : "none";
  const input = /*#__PURE__*/React.createElement("input", _extends({
    onFocus: () => setFocus(true),
    onBlur: () => setFocus(false),
    onMouseEnter: () => setHover(true),
    onMouseLeave: () => setHover(false),
    style: {
      fontFamily: "var(--font-sans)",
      fontSize: 14,
      padding: leadingIcon ? "11px 14px 11px 40px" : "11px 14px",
      background: "var(--uw-surface)",
      border: `1px solid ${borderColor}`,
      borderRadius: "var(--r-md)",
      color: "var(--uw-ink-900)",
      width: "100%",
      outline: "none",
      boxShadow: ring,
      transition: "border var(--dur-fast), box-shadow var(--dur-fast)",
      ...style
    }
  }, rest));
  if (!leadingIcon) return input;
  return /*#__PURE__*/React.createElement("div", {
    style: {
      position: "relative",
      width: "100%"
    }
  }, /*#__PURE__*/React.createElement("span", {
    style: {
      position: "absolute",
      left: 12,
      top: "50%",
      transform: "translateY(-50%)",
      color: "var(--uw-ink-400)",
      display: "inline-flex",
      pointerEvents: "none"
    }
  }, leadingIcon), input);
}
Object.assign(__ds_scope, { Input });
})(); } catch (e) { __ds_ns.__errors.push({ path: "components/forms/Input.jsx", error: String((e && e.message) || e) }); }

// components/forms/Switch.jsx
try { (() => {
/** Toggle switch; track turns USMLE Blue when on. */
function Switch({
  checked,
  onChange,
  label,
  disabled = false,
  style = {}
}) {
  return /*#__PURE__*/React.createElement("label", {
    style: {
      display: "inline-flex",
      alignItems: "center",
      gap: 10,
      fontSize: 14,
      color: "var(--uw-ink-800)",
      cursor: disabled ? "not-allowed" : "pointer",
      opacity: disabled ? 0.5 : 1,
      ...style
    }
  }, /*#__PURE__*/React.createElement("span", {
    onClick: () => !disabled && onChange && onChange(!checked),
    style: {
      width: 36,
      height: 20,
      borderRadius: 999,
      background: checked ? "var(--uw-blue-500)" : "var(--uw-ink-200)",
      position: "relative",
      transition: "background var(--dur-fast)",
      flexShrink: 0
    }
  }, /*#__PURE__*/React.createElement("span", {
    style: {
      position: "absolute",
      top: 2,
      left: 2,
      width: 16,
      height: 16,
      background: "#fff",
      borderRadius: "50%",
      boxShadow: "0 1px 3px rgba(0,0,0,.2)",
      transform: checked ? "translateX(16px)" : "translateX(0)",
      transition: "transform var(--dur-fast) var(--ease-out)"
    }
  })), label);
}
Object.assign(__ds_scope, { Switch });
})(); } catch (e) { __ds_ns.__errors.push({ path: "components/forms/Switch.jsx", error: String((e && e.message) || e) }); }

// ui_kits/icons.js
try { (() => {
/* USMLE Wise — Lucide icon set (MIT, lucide.dev), inlined as React components.
   Stroke 2, 24x24, currentColor — matches the brand's icon system. */
(function (global) {
  const React = global.React;
  function make(paths) {
    return function Icon({
      size = 18,
      color = "currentColor",
      style = {},
      ...rest
    }) {
      return React.createElement("svg", {
        width: size,
        height: size,
        viewBox: "0 0 24 24",
        fill: "none",
        stroke: color,
        strokeWidth: 2,
        strokeLinecap: "round",
        strokeLinejoin: "round",
        style: {
          display: "block",
          flexShrink: 0,
          ...style
        },
        ...rest
      }, paths.map((d, i) => d.c ? React.createElement(d.t, {
        key: i,
        ...d.a
      }) : React.createElement("path", {
        key: i,
        d
      })));
    };
  }
  const C = (t, a) => ({
    c: true,
    t,
    a
  });
  const Icons = {
    LayoutGrid: make([C("rect", {
      x: 3,
      y: 3,
      width: 7,
      height: 7,
      rx: 1
    }), C("rect", {
      x: 14,
      y: 3,
      width: 7,
      height: 7,
      rx: 1
    }), C("rect", {
      x: 14,
      y: 14,
      width: 7,
      height: 7,
      rx: 1
    }), C("rect", {
      x: 3,
      y: 14,
      width: 7,
      height: 7,
      rx: 1
    })]),
    BookOpen: make(["M12 7v14", "M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z"]),
    Target: make([C("circle", {
      cx: 12,
      cy: 12,
      r: 10
    }), C("circle", {
      cx: 12,
      cy: 12,
      r: 6
    }), C("circle", {
      cx: 12,
      cy: 12,
      r: 2
    })]),
    Flame: make(["M8.5 14.5A2.5 2.5 0 0 0 11 12c0-1.38-.5-2-1-3-1.072-2.143-.224-4.054 2-6 .5 2.5 2 4.9 4 6.5 2 1.6 3 3.5 3 5.5a7 7 0 1 1-14 0c0-1.153.433-2.294 1-3a2.5 2.5 0 0 0 2.5 2.5z"]),
    User: make(["M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2", C("circle", {
      cx: 12,
      cy: 7,
      r: 4
    })]),
    MessageCircle: make(["M7.9 20A9 9 0 1 0 4 16.1L2 22z"]),
    Calendar: make([C("rect", {
      x: 3,
      y: 4,
      width: 18,
      height: 18,
      rx: 2
    }), "M3 10h18", "M8 2v4", "M16 2v4"]),
    Search: make([C("circle", {
      cx: 11,
      cy: 11,
      r: 8
    }), "m21 21-4.3-4.3"]),
    Bell: make(["M10.268 21a2 2 0 0 0 3.464 0", "M3.262 15.326A1 1 0 0 0 4 17h16a1 1 0 0 0 .74-1.673C19.41 13.956 18 12.499 18 8A6 6 0 0 0 6 8c0 4.499-1.411 5.956-2.738 7.326"]),
    Settings: make([C("circle", {
      cx: 12,
      cy: 12,
      r: 3
    }), "M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 1 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-4 0v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 1 1-2.83-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1 0-4h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 1 1 2.83-2.83l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 4 0v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 1 1 2.83 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 0 4h-.09a1.65 1.65 0 0 0-1.51 1z"]),
    ArrowRight: make(["M5 12h14", "m12 5 7 7-7 7"]),
    Check: make(["M20 6 9 17l-5-5"]),
    Star: make(["M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.764.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.765-.56l.883-5.139a2.122 2.122 0 0 0-.611-1.879L2.166 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"]),
    Globe: make([C("circle", {
      cx: 12,
      cy: 12,
      r: 10
    }), "M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20", "M2 12h20"]),
    Clock: make([C("circle", {
      cx: 12,
      cy: 12,
      r: 10
    }), "M12 6v6l4 2"]),
    Play: make([C("polygon", {
      points: "6 3 20 12 6 21 6 3"
    })]),
    ChevronRight: make(["m9 18 6-6-6-6"]),
    TrendingUp: make(["M16 7h6v6", "m22 7-8.5 8.5-5-5L2 17"]),
    Award: make([C("circle", {
      cx: 12,
      cy: 8,
      r: 6
    }), "M15.477 12.89 17 22l-5-3-5 3 1.523-9.11"]),
    Stethoscope: make(["M11 2v2", "M5 2v2", "M5 3H4a2 2 0 0 0-2 2v4a6 6 0 0 0 12 0V5a2 2 0 0 0-2-2h-1", C("circle", {
      cx: 20,
      cy: 10,
      r: 2
    }), "M8 15a6 6 0 0 0 12 0v-3"]),
    Menu: make(["M4 12h16", "M4 6h16", "M4 18h16"]),
    GraduationCap: make(["M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z", "M22 10v6", "M6 12.5V16a6 3 0 0 0 12 0v-3.5"]),
    Quote: make(["M3 21c3 0 7-1 7-8V5c0-1.25-.756-2.017-2-2H4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2 1 0 1 0 1 1v1c0 1-1 2-2 2s-1 .008-1 1.031V20c0 1 0 1 1 1z", "M15 21c3 0 7-1 7-8V5c0-1.25-.757-2.017-2-2h-4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2h.75c0 2.25.25 4-2.75 4v3c0 1 0 1 1 1z"])
  };
  global.UWIcons = Icons;
})(window);
})(); } catch (e) { __ds_ns.__errors.push({ path: "ui_kits/icons.js", error: String((e && e.message) || e) }); }

// ui_kits/marketing/Landing.jsx
try { (() => {
/* USMLE Wise — Marketing landing page. Exports window.LandingPage */
(function (global) {
  const React = global.React;
  const I = global.UWIcons;
  const {
    Button,
    Card,
    Badge,
    Avatar
  } = global.USMLEWiseDesignSystem_d852a5;
  const serif = {
    fontFamily: "var(--font-display)",
    fontWeight: 400,
    letterSpacing: "-0.02em",
    color: "var(--uw-ink-900)",
    margin: 0
  };
  const eyebrow = {
    fontFamily: "var(--font-mono)",
    fontSize: 11,
    letterSpacing: "0.12em",
    textTransform: "uppercase",
    color: "var(--uw-red-500)",
    display: "inline-flex",
    alignItems: "center",
    gap: 8
  };
  function Nav() {
    const link = {
      fontSize: 13.5,
      color: "var(--uw-ink-700)",
      padding: "6px 12px",
      borderRadius: "var(--r-sm)",
      cursor: "pointer"
    };
    return /*#__PURE__*/React.createElement("nav", {
      style: {
        display: "flex",
        justifyContent: "space-between",
        alignItems: "center",
        padding: "16px 40px",
        borderBottom: "1px solid var(--uw-border)",
        background: "rgba(255,255,255,.85)",
        backdropFilter: "blur(8px)",
        position: "sticky",
        top: 0,
        zIndex: 10
      }
    }, /*#__PURE__*/React.createElement("img", {
      src: "../../assets/Logo Horizontal.svg",
      style: {
        height: 30
      },
      alt: "USMLE Wise"
    }), /*#__PURE__*/React.createElement("div", {
      style: {
        display: "flex",
        gap: 4,
        alignItems: "center"
      }
    }, /*#__PURE__*/React.createElement("a", {
      style: link
    }, "Curriculum"), /*#__PURE__*/React.createElement("a", {
      style: link
    }, "Mentors"), /*#__PURE__*/React.createElement("a", {
      style: link
    }, "The Match"), /*#__PURE__*/React.createElement("a", {
      style: link
    }, "Pricing")), /*#__PURE__*/React.createElement("div", {
      style: {
        display: "flex",
        gap: 10,
        alignItems: "center"
      }
    }, /*#__PURE__*/React.createElement(Button, {
      variant: "ghost",
      size: "sm"
    }, "Log in"), /*#__PURE__*/React.createElement(Button, {
      variant: "primary",
      size: "sm"
    }, "Start free")));
  }
  function Hero() {
    return /*#__PURE__*/React.createElement("section", {
      style: {
        display: "grid",
        gridTemplateColumns: "1.15fr 1fr",
        gap: 48,
        alignItems: "center",
        padding: "72px 40px 64px",
        background: "radial-gradient(900px 460px at 92% -5%, var(--uw-blue-50), transparent), var(--uw-surface)"
      }
    }, /*#__PURE__*/React.createElement("div", null, /*#__PURE__*/React.createElement("div", {
      style: {
        ...eyebrow,
        marginBottom: 18
      }
    }, /*#__PURE__*/React.createElement("span", {
      style: {
        width: 6,
        height: 6,
        borderRadius: "50%",
        background: "var(--uw-red-500)"
      }
    }), "For international medical graduates"), /*#__PURE__*/React.createElement("h1", {
      style: {
        ...serif,
        fontSize: 60,
        lineHeight: 1.02,
        maxWidth: "16ch"
      }
    }, "The next step to becoming a ", /*#__PURE__*/React.createElement("em", {
      style: {
        fontStyle: "italic",
        color: "var(--uw-red-500)"
      }
    }, "US\xA0doctor"), " is clear."), /*#__PURE__*/React.createElement("p", {
      style: {
        fontSize: 17,
        lineHeight: 1.55,
        color: "var(--uw-ink-600)",
        maxWidth: "52ch",
        margin: "20px 0 28px"
      }
    }, "USMLE Wise turns the most overwhelming process in medical education into a walkable path \u2014 physician-led prep, mentor matching, and Match strategy in one place."), /*#__PURE__*/React.createElement("div", {
      style: {
        display: "flex",
        gap: 12,
        flexWrap: "wrap",
        alignItems: "center"
      }
    }, /*#__PURE__*/React.createElement(Button, {
      variant: "primary",
      size: "lg",
      trailingIcon: /*#__PURE__*/React.createElement(I.ArrowRight, {
        size: 15
      })
    }, "Start your USMLE plan"), /*#__PURE__*/React.createElement(Button, {
      variant: "outline",
      size: "lg",
      leadingIcon: /*#__PURE__*/React.createElement(I.Play, {
        size: 14
      })
    }, "Watch a lesson")), /*#__PURE__*/React.createElement("div", {
      style: {
        display: "flex",
        gap: 22,
        marginTop: 30,
        fontSize: 12.5,
        color: "var(--uw-ink-500)"
      }
    }, /*#__PURE__*/React.createElement("span", {
      style: {
        display: "inline-flex",
        gap: 6,
        alignItems: "center"
      }
    }, /*#__PURE__*/React.createElement(I.Check, {
      size: 14,
      color: "var(--uw-success-500)"
    }), " ", /*#__PURE__*/React.createElement("b", {
      style: {
        color: "var(--uw-ink-900)"
      }
    }, "12,000+"), " students"), /*#__PURE__*/React.createElement("span", {
      style: {
        display: "inline-flex",
        gap: 6,
        alignItems: "center"
      }
    }, /*#__PURE__*/React.createElement(I.Award, {
      size: 14,
      color: "var(--uw-success-500)"
    }), " ", /*#__PURE__*/React.createElement("b", {
      style: {
        color: "var(--uw-ink-900)"
      }
    }, "94%"), " Match rate"), /*#__PURE__*/React.createElement("span", {
      style: {
        display: "inline-flex",
        gap: 6,
        alignItems: "center"
      }
    }, /*#__PURE__*/React.createElement(I.Star, {
      size: 14,
      color: "var(--uw-warning-500)"
    }), " ", /*#__PURE__*/React.createElement("b", {
      style: {
        color: "var(--uw-ink-900)"
      }
    }, "4.9"), " mentor rating"))), /*#__PURE__*/React.createElement("div", {
      style: {
        background: "var(--uw-blue-500)",
        borderRadius: "var(--r-lg)",
        padding: 22,
        color: "#fff",
        position: "relative",
        overflow: "hidden",
        boxShadow: "var(--shadow-xl)"
      }
    }, /*#__PURE__*/React.createElement("div", {
      style: {
        position: "absolute",
        inset: 0,
        backgroundImage: "radial-gradient(rgba(255,255,255,.12) 1px, transparent 1px)",
        backgroundSize: "16px 16px"
      }
    }), [{
      t: "Step 2 CK · Internal Medicine",
      s: "64% complete · on pace for March",
      v: 64
    }, {
      t: "Today's mentor session",
      s: "Dr. Anika Rao · 4:30 PM",
      v: null
    }, {
      t: "QBank streak",
      s: "14 days — personal best",
      v: 100
    }].map((c, i) => /*#__PURE__*/React.createElement("div", {
      key: i,
      style: {
        background: "rgba(255,255,255,.08)",
        backdropFilter: "blur(8px)",
        border: "1px solid rgba(255,255,255,.16)",
        borderRadius: 10,
        padding: 14,
        position: "relative",
        zIndex: 1,
        marginBottom: 10
      }
    }, /*#__PURE__*/React.createElement("b", {
      style: {
        fontSize: 13,
        fontWeight: 600
      }
    }, c.t), /*#__PURE__*/React.createElement("small", {
      style: {
        display: "block",
        fontSize: 11.5,
        color: "rgba(255,255,255,.65)",
        margin: "3px 0 0"
      }
    }, c.s), c.v != null && /*#__PURE__*/React.createElement("div", {
      style: {
        height: 6,
        background: "rgba(255,255,255,.2)",
        borderRadius: 999,
        marginTop: 10,
        overflow: "hidden"
      }
    }, /*#__PURE__*/React.createElement("div", {
      style: {
        width: c.v + "%",
        height: "100%",
        background: "var(--uw-success-400)",
        borderRadius: 999
      }
    }))))));
  }
  const FEATURES = [{
    icon: "BookOpen",
    t: "Physician-led QBank",
    d: "Thousands of high-yield questions written and explained by practicing US physicians, organized by organ system."
  }, {
    icon: "User",
    t: "1:1 mentor matching",
    d: "Paired with a US physician who has walked your exact path — by specialty, language, and timeline."
  }, {
    icon: "GraduationCap",
    t: "End-to-end pathway",
    d: "ECFMG, clinical experience, visas, ERAS, and rank lists — every step mapped, with deadlines tracked."
  }];
  function Features() {
    return /*#__PURE__*/React.createElement("section", {
      style: {
        padding: "64px 40px",
        background: "var(--uw-bg)",
        borderTop: "1px solid var(--uw-border)"
      }
    }, /*#__PURE__*/React.createElement("div", {
      style: eyebrow
    }, "What you get"), /*#__PURE__*/React.createElement("h2", {
      style: {
        ...serif,
        fontSize: 40,
        margin: "12px 0 32px",
        maxWidth: "20ch"
      }
    }, "A steady hand at every step."), /*#__PURE__*/React.createElement("div", {
      style: {
        display: "grid",
        gridTemplateColumns: "repeat(3, 1fr)",
        gap: 20
      }
    }, FEATURES.map((f, i) => {
      const Icon = I[f.icon];
      return /*#__PURE__*/React.createElement(Card, {
        key: i
      }, /*#__PURE__*/React.createElement("div", {
        style: {
          width: 38,
          height: 38,
          background: "var(--uw-blue-50)",
          color: "var(--uw-blue-500)",
          borderRadius: "var(--r-md)",
          display: "grid",
          placeItems: "center",
          marginBottom: 14
        }
      }, /*#__PURE__*/React.createElement(Icon, {
        size: 20
      })), /*#__PURE__*/React.createElement("h4", {
        style: {
          margin: "0 0 6px",
          fontSize: 16,
          fontWeight: 600,
          color: "var(--uw-ink-900)"
        }
      }, f.t), /*#__PURE__*/React.createElement("p", {
        style: {
          margin: 0,
          fontSize: 13.5,
          color: "var(--uw-ink-600)",
          lineHeight: 1.55
        }
      }, f.d));
    })));
  }
  const COURSES = [{
    t: "Step 1 — Foundations",
    a: "Dr. Anika Rao, MD",
    meta: "32 lessons · 14h",
    grad: "linear-gradient(135deg, var(--uw-blue-500), var(--uw-blue-800))",
    badge: "STEP 1"
  }, {
    t: "Step 2 CK — Internal Medicine",
    a: "Dr. Marco Pereira, MD",
    meta: "48 lessons · 22h",
    grad: "linear-gradient(135deg, var(--uw-red-500), var(--uw-red-700))",
    badge: "STEP 2 CK"
  }, {
    t: "The Match — Strategy",
    a: "Dr. Sofia Chen, MD",
    meta: "26 lessons · 10h",
    grad: "linear-gradient(135deg, var(--uw-ink-700), var(--uw-ink-900))",
    badge: "MATCH"
  }];
  function Courses() {
    return /*#__PURE__*/React.createElement("section", {
      style: {
        padding: "64px 40px"
      }
    }, /*#__PURE__*/React.createElement("div", {
      style: {
        display: "flex",
        justifyContent: "space-between",
        alignItems: "flex-end",
        marginBottom: 28
      }
    }, /*#__PURE__*/React.createElement("div", null, /*#__PURE__*/React.createElement("div", {
      style: eyebrow
    }, "Curriculum"), /*#__PURE__*/React.createElement("h2", {
      style: {
        ...serif,
        fontSize: 40,
        margin: "12px 0 0"
      }
    }, "Built around the exam sequence.")), /*#__PURE__*/React.createElement(Button, {
      variant: "link",
      trailingIcon: /*#__PURE__*/React.createElement(I.ArrowRight, {
        size: 14
      })
    }, "Browse all courses")), /*#__PURE__*/React.createElement("div", {
      style: {
        display: "grid",
        gridTemplateColumns: "repeat(3, 1fr)",
        gap: 20
      }
    }, COURSES.map((c, i) => /*#__PURE__*/React.createElement("div", {
      key: i,
      style: {
        background: "var(--uw-surface)",
        border: "1px solid var(--uw-border)",
        borderRadius: "var(--r-lg)",
        overflow: "hidden"
      }
    }, /*#__PURE__*/React.createElement("div", {
      style: {
        height: 130,
        background: c.grad,
        display: "flex",
        alignItems: "flex-end",
        padding: 14,
        position: "relative"
      }
    }, /*#__PURE__*/React.createElement("span", {
      style: {
        fontFamily: "var(--font-mono)",
        fontSize: 10,
        letterSpacing: "0.1em",
        color: "#fff",
        background: "rgba(0,0,0,.25)",
        padding: "4px 8px",
        borderRadius: 999
      }
    }, c.badge)), /*#__PURE__*/React.createElement("div", {
      style: {
        padding: 16
      }
    }, /*#__PURE__*/React.createElement("div", {
      style: {
        fontSize: 15,
        fontWeight: 600,
        color: "var(--uw-ink-900)",
        marginBottom: 4
      }
    }, c.t), /*#__PURE__*/React.createElement("div", {
      style: {
        fontSize: 12.5,
        color: "var(--uw-ink-500)",
        marginBottom: 12
      }
    }, c.a), /*#__PURE__*/React.createElement("div", {
      style: {
        fontSize: 11.5,
        color: "var(--uw-ink-500)",
        borderTop: "1px solid var(--uw-border)",
        paddingTop: 12,
        display: "flex",
        gap: 10
      }
    }, /*#__PURE__*/React.createElement("span", {
      style: {
        display: "inline-flex",
        gap: 4,
        alignItems: "center"
      }
    }, /*#__PURE__*/React.createElement(I.BookOpen, {
      size: 12
    }), " ", c.meta)))))));
  }
  function Testimonial() {
    return /*#__PURE__*/React.createElement("section", {
      style: {
        padding: "64px 40px",
        background: "var(--uw-bg)",
        borderTop: "1px solid var(--uw-border)"
      }
    }, /*#__PURE__*/React.createElement("div", {
      style: {
        maxWidth: 760,
        margin: "0 auto",
        textAlign: "center"
      }
    }, /*#__PURE__*/React.createElement("div", {
      style: {
        color: "var(--uw-red-500)",
        display: "flex",
        justifyContent: "center",
        marginBottom: 8
      }
    }, /*#__PURE__*/React.createElement(I.Quote, {
      size: 40
    })), /*#__PURE__*/React.createElement("p", {
      style: {
        fontFamily: "var(--font-display)",
        fontStyle: "italic",
        fontSize: 26,
        lineHeight: 1.4,
        color: "var(--uw-ink-800)",
        letterSpacing: "-0.01em",
        margin: "0 0 22px"
      }
    }, "I failed Step 1 on my first attempt and thought I was done. My USMLE Wise mentor rebuilt my plan, week by week. I matched into Internal Medicine last March."), /*#__PURE__*/React.createElement("div", {
      style: {
        display: "flex",
        gap: 12,
        alignItems: "center",
        justifyContent: "center"
      }
    }, /*#__PURE__*/React.createElement(Avatar, {
      initials: "PK",
      tone: "blue"
    }), /*#__PURE__*/React.createElement("div", {
      style: {
        textAlign: "left"
      }
    }, /*#__PURE__*/React.createElement("div", {
      style: {
        fontSize: 13.5,
        fontWeight: 600,
        color: "var(--uw-ink-900)"
      }
    }, "Priya K."), /*#__PURE__*/React.createElement("div", {
      style: {
        fontSize: 12,
        color: "var(--uw-ink-500)"
      }
    }, "IMG \xB7 Matched IM, 2025")))));
  }
  function CTA() {
    return /*#__PURE__*/React.createElement("section", {
      style: {
        padding: "0 40px 64px"
      }
    }, /*#__PURE__*/React.createElement("div", {
      style: {
        background: "var(--uw-blue-500)",
        borderRadius: "var(--r-xl)",
        padding: "56px 40px",
        textAlign: "center",
        color: "#fff",
        position: "relative",
        overflow: "hidden"
      }
    }, /*#__PURE__*/React.createElement("div", {
      style: {
        position: "absolute",
        inset: 0,
        backgroundImage: "radial-gradient(rgba(255,255,255,.1) 1px, transparent 1px)",
        backgroundSize: "18px 18px"
      }
    }), /*#__PURE__*/React.createElement("div", {
      style: {
        position: "relative",
        zIndex: 1
      }
    }, /*#__PURE__*/React.createElement("h2", {
      style: {
        fontFamily: "var(--font-display)",
        fontWeight: 400,
        fontSize: 40,
        letterSpacing: "-0.02em",
        margin: "0 0 12px"
      }
    }, "You are not alone on this path."), /*#__PURE__*/React.createElement("p", {
      style: {
        fontSize: 16,
        color: "rgba(255,255,255,.78)",
        maxWidth: "48ch",
        margin: "0 auto 26px"
      }
    }, "Start free today. Build your plan in ten minutes, meet your mentor this week."), /*#__PURE__*/React.createElement(Button, {
      variant: "primary",
      size: "xl",
      trailingIcon: /*#__PURE__*/React.createElement(I.ArrowRight, {
        size: 16
      })
    }, "Start your USMLE plan"))));
  }
  function Footer() {
    return /*#__PURE__*/React.createElement("footer", {
      style: {
        padding: "32px 40px",
        borderTop: "1px solid var(--uw-border)",
        display: "flex",
        justifyContent: "space-between",
        alignItems: "center",
        color: "var(--uw-ink-500)",
        fontSize: 12.5
      }
    }, /*#__PURE__*/React.createElement("img", {
      src: "../../assets/Logo Horizontal.svg",
      style: {
        height: 24,
        opacity: .85
      },
      alt: "USMLE Wise"
    }), /*#__PURE__*/React.createElement("span", null, "\xA9 2026 USMLE Wise \xB7 Becoming a doctor in the United States."));
  }
  function LandingPage() {
    return /*#__PURE__*/React.createElement("div", {
      style: {
        background: "var(--uw-surface)"
      }
    }, /*#__PURE__*/React.createElement(Nav, null), /*#__PURE__*/React.createElement(Hero, null), /*#__PURE__*/React.createElement(Features, null), /*#__PURE__*/React.createElement(Courses, null), /*#__PURE__*/React.createElement(Testimonial, null), /*#__PURE__*/React.createElement(CTA, null), /*#__PURE__*/React.createElement(Footer, null));
  }
  global.LandingPage = LandingPage;
})(window);
})(); } catch (e) { __ds_ns.__errors.push({ path: "ui_kits/marketing/Landing.jsx", error: String((e && e.message) || e) }); }

// ui_kits/student_app/AppShell.jsx
try { (() => {
/* USMLE Wise — Student app shell: sidebar nav + topbar. Exports window.AppShell */
(function (global) {
  const React = global.React;
  const I = global.UWIcons;
  const NAV = [{
    group: "Study",
    items: [{
      id: "today",
      label: "Today",
      icon: "LayoutGrid"
    }, {
      id: "qbank",
      label: "Question bank",
      icon: "BookOpen"
    }, {
      id: "tests",
      label: "Practice tests",
      icon: "Target"
    }, {
      id: "streak",
      label: "Streak",
      icon: "Flame"
    }]
  }, {
    group: "Coach",
    items: [{
      id: "mentor",
      label: "My mentor",
      icon: "User"
    }, {
      id: "sessions",
      label: "Sessions",
      icon: "MessageCircle"
    }, {
      id: "calendar",
      label: "Calendar",
      icon: "Calendar"
    }]
  }];
  function SideItem({
    item,
    active,
    onClick
  }) {
    const [hover, setHover] = React.useState(false);
    const Icon = I[item.icon];
    const on = active;
    return React.createElement("a", {
      onClick,
      onMouseEnter: () => setHover(true),
      onMouseLeave: () => setHover(false),
      style: {
        display: "flex",
        alignItems: "center",
        gap: 10,
        padding: "8px 10px",
        borderRadius: "var(--r-sm)",
        fontSize: 13.5,
        cursor: "pointer",
        color: on ? "var(--uw-blue-700)" : "var(--uw-ink-700)",
        background: on ? "var(--uw-blue-50)" : hover ? "var(--uw-ink-75)" : "transparent",
        fontWeight: on ? 600 : 400
      }
    }, React.createElement("span", {
      style: {
        width: 22,
        height: 22,
        borderRadius: 5,
        display: "grid",
        placeItems: "center",
        background: on ? "var(--uw-blue-500)" : "var(--uw-ink-100)",
        color: on ? "#fff" : "var(--uw-ink-500)",
        flexShrink: 0
      }
    }, React.createElement(Icon, {
      size: 13
    })), item.label);
  }
  function AppShell({
    active,
    onNavigate,
    children,
    search,
    onSearch
  }) {
    const I2 = global.UWIcons;
    const {
      IconButton,
      Avatar
    } = global.USMLEWiseDesignSystem_d852a5;
    return React.createElement("div", {
      style: {
        display: "grid",
        gridTemplateColumns: "240px 1fr",
        minHeight: "100%",
        background: "var(--uw-bg)"
      }
    },
    // Sidebar
    React.createElement("aside", {
      style: {
        background: "var(--uw-surface)",
        borderRight: "1px solid var(--uw-border)",
        padding: "20px 14px",
        display: "flex",
        flexDirection: "column",
        gap: 4
      }
    }, React.createElement("div", {
      style: {
        display: "flex",
        alignItems: "center",
        gap: 10,
        padding: "0 6px 18px"
      }
    }, React.createElement("img", {
      src: "../../assets/emblem.svg",
      style: {
        width: 30,
        height: 30
      }
    }), React.createElement("div", {
      style: {
        display: "flex",
        alignItems: "baseline",
        gap: 5
      }
    }, React.createElement("span", {
      style: {
        fontFamily: "var(--font-sans)",
        fontWeight: 700,
        fontSize: 16,
        letterSpacing: "-0.02em",
        color: "var(--uw-blue-500)"
      }
    }, "USMLE"), React.createElement("span", {
      style: {
        fontFamily: "var(--font-display)",
        fontStyle: "italic",
        fontSize: 18,
        color: "var(--uw-ink-900)"
      }
    }, "Wise"))), NAV.map(g => React.createElement(React.Fragment, {
      key: g.group
    }, React.createElement("div", {
      style: {
        fontSize: 11,
        letterSpacing: "0.1em",
        textTransform: "uppercase",
        color: "var(--uw-ink-500)",
        padding: "10px 10px 4px",
        fontWeight: 600
      }
    }, g.group), g.items.map(it => React.createElement(SideItem, {
      key: it.id,
      item: it,
      active: active === it.id,
      onClick: () => onNavigate(it.id)
    })))), React.createElement("div", {
      style: {
        marginTop: "auto",
        display: "flex",
        alignItems: "center",
        gap: 10,
        padding: "10px 8px",
        borderTop: "1px solid var(--uw-border)"
      }
    }, React.createElement(Avatar, {
      initials: "JM",
      size: 34,
      tone: "blue"
    }), React.createElement("div", null, React.createElement("div", {
      style: {
        fontSize: 13,
        fontWeight: 600,
        color: "var(--uw-ink-900)"
      }
    }, "Jamal Mensah"), React.createElement("div", {
      style: {
        fontSize: 11.5,
        color: "var(--uw-ink-500)"
      }
    }, "IMG · Step 2 CK")))),
    // Main column
    React.createElement("div", {
      style: {
        display: "flex",
        flexDirection: "column",
        minWidth: 0
      }
    }, React.createElement("header", {
      style: {
        display: "flex",
        alignItems: "center",
        gap: 12,
        padding: "14px 28px",
        borderBottom: "1px solid var(--uw-border)",
        background: "var(--uw-surface)"
      }
    }, React.createElement("div", {
      style: {
        position: "relative",
        flex: 1,
        maxWidth: 420
      }
    }, React.createElement("span", {
      style: {
        position: "absolute",
        left: 12,
        top: "50%",
        transform: "translateY(-50%)",
        color: "var(--uw-ink-400)"
      }
    }, React.createElement(I2.Search, {
      size: 16
    })), React.createElement("input", {
      value: search || "",
      onChange: e => onSearch && onSearch(e.target.value),
      placeholder: "Search the question bank…",
      style: {
        width: "100%",
        fontFamily: "var(--font-sans)",
        fontSize: 13.5,
        padding: "9px 14px 9px 38px",
        background: "var(--uw-surface-sunk)",
        border: "1px solid var(--uw-border)",
        borderRadius: "var(--r-md)",
        color: "var(--uw-ink-900)",
        outline: "none"
      }
    })), React.createElement("div", {
      style: {
        marginLeft: "auto",
        display: "flex",
        alignItems: "center",
        gap: 8
      }
    }, React.createElement(IconButton, {
      ariaLabel: "Notifications",
      variant: "ghost"
    }, React.createElement(I2.Bell, {
      size: 18
    })), React.createElement(IconButton, {
      ariaLabel: "Settings",
      variant: "ghost"
    }, React.createElement(I2.Settings, {
      size: 18
    })))), React.createElement("main", {
      style: {
        padding: "26px 28px 40px",
        overflow: "auto"
      }
    }, children)));
  }
  global.AppShell = AppShell;
})(window);
})(); } catch (e) { __ds_ns.__errors.push({ path: "ui_kits/student_app/AppShell.jsx", error: String((e && e.message) || e) }); }

// ui_kits/student_app/screens.jsx
try { (() => {
/* USMLE Wise — Student app screens. Exports DashboardHome, QBankScreen, MentorsScreen */
(function (global) {
  const React = global.React;
  const I = global.UWIcons;
  const {
    Card,
    Badge,
    Avatar,
    ProgressBar,
    Button,
    Callout,
    Tabs
  } = global.USMLEWiseDesignSystem_d852a5;
  const eyebrow = {
    fontFamily: "var(--font-mono)",
    fontSize: 10.5,
    letterSpacing: "0.1em",
    textTransform: "uppercase",
    color: "var(--uw-ink-500)",
    marginBottom: 8
  };
  const serifH = {
    fontFamily: "var(--font-display)",
    fontWeight: 400,
    letterSpacing: "-0.02em",
    color: "var(--uw-ink-900)",
    margin: 0
  };
  function KPI({
    label,
    value,
    unit,
    delta,
    deltaTone
  }) {
    return /*#__PURE__*/React.createElement(Card, null, /*#__PURE__*/React.createElement("div", {
      style: {
        fontSize: 12,
        color: "var(--uw-ink-500)"
      }
    }, label), /*#__PURE__*/React.createElement("div", {
      style: {
        fontFamily: "var(--font-display)",
        fontSize: 36,
        lineHeight: 1,
        color: "var(--uw-ink-900)",
        margin: "6px 0 8px",
        letterSpacing: "-0.02em"
      }
    }, value, unit && /*#__PURE__*/React.createElement("span", {
      style: {
        fontSize: 15,
        color: "var(--uw-ink-500)",
        marginLeft: 6,
        fontFamily: "var(--font-sans)"
      }
    }, unit)), delta && /*#__PURE__*/React.createElement("div", {
      style: {
        display: "inline-flex",
        alignItems: "center",
        gap: 4,
        fontSize: 12,
        color: deltaTone === "down" ? "var(--uw-red-600)" : "var(--uw-success-700)"
      }
    }, /*#__PURE__*/React.createElement(I.TrendingUp, {
      size: 12
    }), delta));
  }
  const JOURNEY = [{
    t: "ECFMG Certification",
    s: "Verified · complete",
    state: "done"
  }, {
    t: "Step 1 — Pass",
    s: "Passed Aug 2025",
    state: "done"
  }, {
    t: "Step 2 CK — In progress",
    s: "Target: Mar 2026 · 64% through plan",
    state: "now"
  }, {
    t: "Clinical experience (USCE)",
    s: "2 of 4 rotations booked",
    state: "next"
  }, {
    t: "The Match",
    s: "ERAS opens Sep 2026",
    state: "next"
  }];
  function JourneyStep({
    step
  }) {
    const done = step.state === "done",
      now = step.state === "now";
    return /*#__PURE__*/React.createElement("div", {
      style: {
        display: "flex",
        gap: 14,
        alignItems: "flex-start",
        padding: 14,
        background: "var(--uw-surface)",
        border: "1px solid var(--uw-border)",
        borderRadius: "var(--r-md)"
      }
    }, /*#__PURE__*/React.createElement("span", {
      style: {
        width: 28,
        height: 28,
        borderRadius: "50%",
        display: "grid",
        placeItems: "center",
        fontFamily: "var(--font-mono)",
        fontSize: 11,
        fontWeight: 600,
        flexShrink: 0,
        background: done ? "var(--uw-success-500)" : now ? "var(--uw-red-500)" : "var(--uw-ink-75)",
        color: done || now ? "#fff" : "var(--uw-ink-600)",
        border: done || now ? "1px solid transparent" : "1px solid var(--uw-border)"
      }
    }, done ? "✓" : now ? "•" : ""), /*#__PURE__*/React.createElement("div", null, /*#__PURE__*/React.createElement("div", {
      style: {
        fontSize: 14,
        fontWeight: 600,
        color: "var(--uw-ink-900)"
      }
    }, step.t), /*#__PURE__*/React.createElement("div", {
      style: {
        fontSize: 12.5,
        color: "var(--uw-ink-500)"
      }
    }, step.s)));
  }
  function DashboardHome() {
    return /*#__PURE__*/React.createElement("div", null, /*#__PURE__*/React.createElement("div", {
      style: {
        display: "flex",
        justifyContent: "space-between",
        alignItems: "flex-end",
        marginBottom: 22
      }
    }, /*#__PURE__*/React.createElement("div", null, /*#__PURE__*/React.createElement("h2", {
      style: {
        ...serifH,
        fontSize: 32
      }
    }, "Good morning, Jamal."), /*#__PURE__*/React.createElement("p", {
      style: {
        margin: "4px 0 0",
        fontSize: 13.5,
        color: "var(--uw-ink-500)"
      }
    }, "You're 64% through your Step 2 CK plan. One block today keeps you on pace.")), /*#__PURE__*/React.createElement(Button, {
      variant: "primary",
      trailingIcon: /*#__PURE__*/React.createElement(I.ArrowRight, {
        size: 14
      })
    }, "Resume study block")), /*#__PURE__*/React.createElement("div", {
      style: {
        display: "grid",
        gridTemplateColumns: "repeat(4, 1fr)",
        gap: 16,
        marginBottom: 22
      }
    }, /*#__PURE__*/React.createElement(KPI, {
      label: "Avg. QBank score",
      value: "71",
      unit: "%",
      delta: "+6 this week"
    }), /*#__PURE__*/React.createElement(KPI, {
      label: "Questions done",
      value: "2,140",
      delta: "+180 this week"
    }), /*#__PURE__*/React.createElement(KPI, {
      label: "Current streak",
      value: "14",
      unit: "days",
      delta: "Personal best"
    }), /*#__PURE__*/React.createElement(KPI, {
      label: "Days to exam",
      value: "58",
      delta: "On track"
    })), /*#__PURE__*/React.createElement("div", {
      style: {
        display: "grid",
        gridTemplateColumns: "1.4fr 1fr",
        gap: 16
      }
    }, /*#__PURE__*/React.createElement("div", null, /*#__PURE__*/React.createElement("div", {
      style: {
        ...eyebrow,
        color: "var(--uw-red-500)"
      }
    }, "Your pathway"), /*#__PURE__*/React.createElement("h3", {
      style: {
        ...serifH,
        fontSize: 22,
        marginBottom: 14
      }
    }, "The road to residency"), /*#__PURE__*/React.createElement("div", {
      style: {
        display: "flex",
        flexDirection: "column",
        gap: 10
      }
    }, JOURNEY.map((s, i) => /*#__PURE__*/React.createElement(JourneyStep, {
      key: i,
      step: s
    })))), /*#__PURE__*/React.createElement("div", {
      style: {
        display: "flex",
        flexDirection: "column",
        gap: 16
      }
    }, /*#__PURE__*/React.createElement(Card, {
      variant: "accent"
    }, /*#__PURE__*/React.createElement("div", {
      style: {
        ...eyebrow,
        color: "rgba(255,255,255,.6)"
      }
    }, "Today's mentor session"), /*#__PURE__*/React.createElement("div", {
      style: {
        display: "flex",
        gap: 12,
        alignItems: "center",
        marginTop: 4
      }
    }, /*#__PURE__*/React.createElement(Avatar, {
      initials: "AR",
      tone: "red",
      online: true
    }), /*#__PURE__*/React.createElement("div", null, /*#__PURE__*/React.createElement("div", {
      style: {
        fontWeight: 600,
        fontSize: 15
      }
    }, "Dr. Anika Rao, MD"), /*#__PURE__*/React.createElement("div", {
      style: {
        fontSize: 12.5,
        color: "rgba(255,255,255,.72)"
      }
    }, "Internal Medicine \xB7 4:30 PM"))), /*#__PURE__*/React.createElement("div", {
      style: {
        marginTop: 14
      }
    }, /*#__PURE__*/React.createElement(Button, {
      variant: "primary",
      size: "sm",
      fullWidth: true
    }, "Join session"))), /*#__PURE__*/React.createElement(Callout, {
      tone: "amber",
      title: "Heads up"
    }, "Your NBME 12 practice test is scheduled for Saturday. Block 3 hours."), /*#__PURE__*/React.createElement(Card, null, /*#__PURE__*/React.createElement("div", {
      style: eyebrow
    }, "Weakest system"), /*#__PURE__*/React.createElement("div", {
      style: {
        fontSize: 15,
        fontWeight: 600,
        color: "var(--uw-ink-900)",
        marginBottom: 6
      }
    }, "Renal & electrolytes"), /*#__PURE__*/React.createElement(ProgressBar, {
      value: 48,
      tone: "red"
    }), /*#__PURE__*/React.createElement("div", {
      style: {
        fontSize: 12,
        color: "var(--uw-ink-500)",
        marginTop: 8
      }
    }, "48% \u2014 review recommended before exam.")))));
  }
  const Q = {
    stem: "A 58-year-old man presents to the emergency department with severe epigastric pain radiating to the back, nausea, and vomiting for 12 hours. He has a history of heavy alcohol use. Serum lipase is markedly elevated. Which of the following is the most appropriate initial step in management?",
    choices: [{
      k: "A",
      t: "Immediate exploratory laparotomy"
    }, {
      k: "B",
      t: "Aggressive intravenous fluid resuscitation",
      correct: true
    }, {
      k: "C",
      t: "Oral pancreatic enzyme supplementation"
    }, {
      k: "D",
      t: "Broad-spectrum antibiotics for all patients"
    }, {
      k: "E",
      t: "Urgent ERCP within 6 hours"
    }]
  };
  function QBankScreen() {
    const [picked, setPicked] = React.useState(null);
    const revealed = picked != null;
    return /*#__PURE__*/React.createElement("div", null, /*#__PURE__*/React.createElement("div", {
      style: {
        display: "flex",
        justifyContent: "space-between",
        alignItems: "center",
        marginBottom: 16
      }
    }, /*#__PURE__*/React.createElement("div", null, /*#__PURE__*/React.createElement("div", {
      style: eyebrow
    }, "Question bank \xB7 Gastrointestinal"), /*#__PURE__*/React.createElement("h2", {
      style: {
        ...serifH,
        fontSize: 26
      }
    }, "Question 1,204")), /*#__PURE__*/React.createElement("div", {
      style: {
        display: "flex",
        gap: 8,
        alignItems: "center"
      }
    }, /*#__PURE__*/React.createElement(Badge, {
      tone: "neutral",
      dot: true
    }, "Timed \xB7 1:32"), /*#__PURE__*/React.createElement(Badge, {
      tone: "blue"
    }, "Tutor mode"))), /*#__PURE__*/React.createElement(Card, {
      style: {
        padding: 24
      }
    }, /*#__PURE__*/React.createElement("p", {
      style: {
        fontSize: 16,
        lineHeight: 1.6,
        color: "var(--uw-ink-800)",
        marginTop: 0
      }
    }, Q.stem), /*#__PURE__*/React.createElement("div", {
      style: {
        display: "flex",
        flexDirection: "column",
        gap: 10,
        marginTop: 8
      }
    }, Q.choices.map(c => {
      const isPicked = picked === c.k;
      let border = "1px solid var(--uw-border-strong)",
        bg = "var(--uw-surface)",
        tone = "var(--uw-ink-800)";
      if (revealed && c.correct) {
        border = "1.5px solid var(--uw-success-500)";
        bg = "var(--uw-success-50)";
      } else if (revealed && isPicked && !c.correct) {
        border = "1.5px solid var(--uw-danger-500)";
        bg = "var(--uw-danger-50)";
      }
      return /*#__PURE__*/React.createElement("button", {
        key: c.k,
        onClick: () => !revealed && setPicked(c.k),
        style: {
          display: "flex",
          gap: 12,
          alignItems: "center",
          textAlign: "left",
          width: "100%",
          padding: "12px 14px",
          borderRadius: "var(--r-md)",
          border,
          background: bg,
          cursor: revealed ? "default" : "pointer",
          fontFamily: "var(--font-sans)",
          fontSize: 14,
          color: tone
        }
      }, /*#__PURE__*/React.createElement("span", {
        style: {
          width: 24,
          height: 24,
          borderRadius: "50%",
          border: "1px solid var(--uw-border-strong)",
          display: "grid",
          placeItems: "center",
          fontFamily: "var(--font-mono)",
          fontSize: 12,
          flexShrink: 0,
          color: "var(--uw-ink-600)"
        }
      }, c.k), c.t);
    })), revealed && /*#__PURE__*/React.createElement("div", {
      style: {
        marginTop: 18
      }
    }, /*#__PURE__*/React.createElement(Callout, {
      tone: picked === "B" ? "success" : "red",
      title: picked === "B" ? "Correct — B" : "Incorrect — the answer is B"
    }, "Acute pancreatitis is managed first with aggressive IV fluid resuscitation to prevent hypovolemia and pancreatic hypoperfusion. Antibiotics are not routine; ERCP is reserved for gallstone pancreatitis with cholangitis.")), /*#__PURE__*/React.createElement("div", {
      style: {
        display: "flex",
        gap: 10,
        marginTop: 18
      }
    }, /*#__PURE__*/React.createElement(Button, {
      variant: "outline"
    }, "Previous"), /*#__PURE__*/React.createElement(Button, {
      variant: "primary",
      style: {
        marginLeft: "auto"
      },
      trailingIcon: /*#__PURE__*/React.createElement(I.ArrowRight, {
        size: 14
      }),
      onClick: () => setPicked(null)
    }, revealed ? "Next question" : "Submit answer"))));
  }
  const MENTORS = [{
    n: "Dr. Anika Rao",
    r: "Internal Medicine · Johns Hopkins",
    rt: "4.97",
    langs: "EN · HI",
    sess: "240",
    tone: "blue"
  }, {
    n: "Dr. Marco Pereira",
    r: "Surgery · Mass General",
    rt: "4.92",
    langs: "EN · PT · ES",
    sess: "180",
    tone: "red"
  }, {
    n: "Dr. Sofia Chen",
    r: "Pediatrics · Stanford",
    rt: "4.99",
    langs: "EN · ZH",
    sess: "410",
    tone: "green"
  }];
  function MentorsScreen() {
    return /*#__PURE__*/React.createElement("div", null, /*#__PURE__*/React.createElement("div", {
      style: eyebrow
    }, "Coach"), /*#__PURE__*/React.createElement("h2", {
      style: {
        ...serifH,
        fontSize: 28,
        marginBottom: 4
      }
    }, "Your mentors"), /*#__PURE__*/React.createElement("p", {
      style: {
        fontSize: 14,
        color: "var(--uw-ink-500)",
        margin: "0 0 20px",
        maxWidth: "60ch"
      }
    }, "US physicians who have walked this path. Book a 1:1 or join a cohort study group."), /*#__PURE__*/React.createElement("div", {
      style: {
        display: "grid",
        gridTemplateColumns: "repeat(3, 1fr)",
        gap: 16
      }
    }, MENTORS.map((m, i) => /*#__PURE__*/React.createElement(Card, {
      key: i,
      hover: true
    }, /*#__PURE__*/React.createElement("div", {
      style: {
        display: "flex",
        gap: 14,
        alignItems: "flex-start"
      }
    }, /*#__PURE__*/React.createElement(Avatar, {
      initials: m.n.split(" ")[1][0] + m.n.split(" ")[2][0],
      tone: m.tone,
      online: true
    }), /*#__PURE__*/React.createElement("div", null, /*#__PURE__*/React.createElement("div", {
      style: {
        fontWeight: 600,
        color: "var(--uw-ink-900)",
        fontSize: 15
      }
    }, m.n), /*#__PURE__*/React.createElement("div", {
      style: {
        fontSize: 12.5,
        color: "var(--uw-ink-500)",
        marginTop: 2
      }
    }, m.r))), /*#__PURE__*/React.createElement("div", {
      style: {
        display: "flex",
        gap: 12,
        marginTop: 12,
        fontSize: 12,
        color: "var(--uw-ink-600)"
      }
    }, /*#__PURE__*/React.createElement("span", {
      style: {
        display: "inline-flex",
        gap: 4,
        alignItems: "center"
      }
    }, /*#__PURE__*/React.createElement(I.Star, {
      size: 13,
      color: "var(--uw-warning-500)"
    }), " ", m.rt), /*#__PURE__*/React.createElement("span", {
      style: {
        display: "inline-flex",
        gap: 4,
        alignItems: "center"
      }
    }, /*#__PURE__*/React.createElement(I.Globe, {
      size: 13
    }), " ", m.langs), /*#__PURE__*/React.createElement("span", {
      style: {
        display: "inline-flex",
        gap: 4,
        alignItems: "center"
      }
    }, /*#__PURE__*/React.createElement(I.Clock, {
      size: 13
    }), " ", m.sess)), /*#__PURE__*/React.createElement("div", {
      style: {
        marginTop: 14
      }
    }, /*#__PURE__*/React.createElement(Button, {
      variant: "outline",
      size: "sm",
      fullWidth: true
    }, "Book a session"))))));
  }
  Object.assign(global, {
    DashboardHome,
    QBankScreen,
    MentorsScreen
  });
})(window);
})(); } catch (e) { __ds_ns.__errors.push({ path: "ui_kits/student_app/screens.jsx", error: String((e && e.message) || e) }); }

// uploads/script.js
try { (() => {
/* ============================================================
   USMLE Wise — Design System docs
   Vanilla JS: scroll-spy, smooth nav, accordion, tab toggle
   ============================================================ */

(function () {
  'use strict';

  // Initialize Lucide icons
  if (window.lucide && typeof window.lucide.createIcons === 'function') {
    window.lucide.createIcons();
  }

  // ---------- 1. Scroll-spy: active sidebar link based on viewport ----------
  const links = document.querySelectorAll('.nav-link');
  const sections = Array.from(document.querySelectorAll('main .section, main .hero'));
  function setActive(id) {
    links.forEach(l => {
      const isMatch = l.getAttribute('href') === '#' + id;
      l.classList.toggle('is-active', isMatch);
    });
  }
  if ('IntersectionObserver' in window && sections.length) {
    const io = new IntersectionObserver(entries => {
      // Pick the entry closest to the top that's intersecting
      const visible = entries.filter(e => e.isIntersecting).sort((a, b) => a.boundingClientRect.top - b.boundingClientRect.top);
      if (visible[0]) {
        const id = visible[0].target.id;
        if (id) setActive(id);
      }
    }, {
      rootMargin: '-20% 0px -60% 0px',
      threshold: 0
    });
    sections.forEach(s => io.observe(s));
  }

  // Mark first section active on load
  if (sections[0] && sections[0].id) setActive(sections[0].id);

  // ---------- 2. Smooth-scroll for sidebar links (older browsers) ----------
  links.forEach(link => {
    link.addEventListener('click', e => {
      const href = link.getAttribute('href');
      if (!href || !href.startsWith('#')) return;
      const target = document.querySelector(href);
      if (!target) return;
      e.preventDefault();
      target.scrollIntoView({
        behavior: 'smooth',
        block: 'start'
      });
      history.replaceState(null, '', href);
    });
  });

  // ---------- 3. Accordion ----------
  document.querySelectorAll('.accordion__item').forEach(item => {
    const head = item.querySelector('.accordion__head');
    if (!head) return;
    head.addEventListener('click', () => {
      // Close siblings within the same accordion
      const parent = item.parentElement;
      parent.querySelectorAll('.accordion__item').forEach(other => {
        if (other !== item) other.classList.remove('is-open');
      });
      item.classList.toggle('is-open');
    });
  });

  // ---------- 4. Tab toggles (visual only) ----------
  document.querySelectorAll('.tabs').forEach(group => {
    const btns = group.querySelectorAll('.tabs__btn');
    btns.forEach(b => {
      b.addEventListener('click', () => {
        btns.forEach(x => x.classList.remove('is-active'));
        b.classList.add('is-active');
      });
    });
  });

  // ---------- 5. Pagination toggles (visual only) ----------
  document.querySelectorAll('.pagination').forEach(p => {
    const btns = p.querySelectorAll('.pagination__btn');
    btns.forEach(b => {
      // Only number buttons toggle (skip ‹ ›)
      if (!/^\d+$/.test(b.textContent.trim())) return;
      b.addEventListener('click', () => {
        btns.forEach(x => x.classList.remove('is-active'));
        b.classList.add('is-active');
      });
    });
  });

  // ---------- 6. Topnav link toggles (visual only) ----------
  document.querySelectorAll('.topnav__links, .lp__nav-links').forEach(g => {
    g.querySelectorAll('a').forEach(a => {
      a.addEventListener('click', e => {
        e.preventDefault();
        g.querySelectorAll('a').forEach(x => x.classList.remove('is-active'));
        a.classList.add('is-active');
      });
    });
  });

  // ---------- 7. App side rail toggles (visual only) ----------
  document.querySelectorAll('.appside').forEach(g => {
    g.querySelectorAll('.appside__item').forEach(a => {
      a.addEventListener('click', e => {
        e.preventDefault();
        g.querySelectorAll('.appside__item').forEach(x => x.classList.remove('is-active'));
        a.classList.add('is-active');
      });
    });
  });

  // ---------- 8. Auto-open the first accordion item on docs load ----------
  const firstAcc = document.querySelector('.accordion .accordion__item');
  if (firstAcc) firstAcc.classList.add('is-open');

  // Dark mode toggle is handled by inline onclick → window.uwToggleTheme()
  // defined in <head> of index.html. No JS hookup needed here.
})();
})(); } catch (e) { __ds_ns.__errors.push({ path: "uploads/script.js", error: String((e && e.message) || e) }); }

__ds_ns.Button = __ds_scope.Button;

__ds_ns.IconButton = __ds_scope.IconButton;

__ds_ns.Avatar = __ds_scope.Avatar;

__ds_ns.Badge = __ds_scope.Badge;

__ds_ns.Card = __ds_scope.Card;

__ds_ns.ProgressBar = __ds_scope.ProgressBar;

__ds_ns.Alert = __ds_scope.Alert;

__ds_ns.Callout = __ds_scope.Callout;

__ds_ns.Tabs = __ds_scope.Tabs;

__ds_ns.Checkbox = __ds_scope.Checkbox;

__ds_ns.Field = __ds_scope.Field;

__ds_ns.Input = __ds_scope.Input;

__ds_ns.Switch = __ds_scope.Switch;

})();
